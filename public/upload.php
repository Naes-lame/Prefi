<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the upload directory based on the type
$type = $_POST['type'] ?? '';
$allowedTypes = ['banners', 'categories', 'products'];

// Validate the type
if (!in_array($type, $allowedTypes)) {
    die('Invalid type specified');
}

// Create the target directory if it doesn't exist
$targetDir = __DIR__ . "/../storage/app/public/{$type}/";
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0755, true);
}

// Process single file upload
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $targetFile = $targetDir . ($_POST['filename'] ?? basename($file['name']));
    
    // Check if file is an image
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $check = getimagesize($file['tmp_name']);
    if ($check === false) {
        die('File is not an image.');
    }
    
    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($targetFile)) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// Process multiple files
elseif (isset($_FILES['files'])) {
    $files = $_FILES['files'];
    $uploadCount = 0;
    
    for ($i = 0; $i < count($files['name']); $i++) {
        $tmpFilePath = $files['tmp_name'][$i];
        
        if ($tmpFilePath != "") {
            // Set a new filename
            $newFileName = "product_" . ($i + 1) . "." . pathinfo($files['name'][$i], PATHINFO_EXTENSION);
            $targetFile = $targetDir . $newFileName;
            
            // Check if file is an image
            $check = getimagesize($tmpFilePath);
            if ($check !== false) {
                if (move_uploaded_file($tmpFilePath, $targetFile)) {
                    $uploadCount++;
                }
            }
        }
    }
    
    echo "Successfully uploaded $uploadCount files.";
}

// Add a back link
echo '<p><a href="/upload-images.html">Go back to upload form</a></p>';
?>
