<?php
// Create sample banner image
$banner = imagecreatetruecolor(800, 400);
$bgColor = imagecolorallocate($banner, 70, 130, 180); // Steel blue
$textColor = imagecolorallocate($banner, 255, 255, 255); // White
imagefill($banner, 0, 0, $bgColor);
$text = "Banner 2";
$fontSize = 5;
$x = (imagesx($banner) - imagefontwidth($fontSize) * strlen($text)) / 2;
$y = (imagesy($banner) - imagefontheight($fontSize)) / 2;
imagestring($banner, $fontSize, $x, $y, $text, $textColor);
imagejpeg($banner, __DIR__ . '/storage/app/public/banners/banner2.jpg', 90);

// Create sample category image
$category = imagecreatetruecolor(400, 300);
$bgColor = imagecolorallocate($category, 60, 179, 113); // Medium sea green
$textColor = imagecolorallocate($category, 255, 255, 255); // White
imagefill($category, 0, 0, $bgColor);
$text = "Category 1";
$fontSize = 5;
$x = (imagesx($category) - imagefontwidth($fontSize) * strlen($text)) / 2;
$y = (imagesy($category) - imagefontheight($fontSize)) / 2;
imagestring($category, $fontSize, $x, $y, $text, $textColor);
imagejpeg($category, __DIR__ . '/storage/app/public/categories/category1.jpg', 90);

// Create sample product images
for ($i = 1; $i <= 10; $i++) {
    $product = imagecreatetruecolor(600, 600);
    $r = rand(100, 200);
    $g = rand(100, 200);
    $b = rand(100, 200);
    $bgColor = imagecolorallocate($product, $r, $g, $b);
    $textColor = imagecolorallocate($product, 255, 255, 255);
    imagefill($product, 0, 0, $bgColor);
    $text = "Product $i";
    $fontSize = 5;
    $x = (imagesx($product) - imagefontwidth($fontSize) * strlen($text)) / 2;
    $y = (imagesy($product) - imagefontheight($fontSize)) / 2;
    imagestring($product, $fontSize, $x, $y, $text, $textColor);
    imagejpeg($product, __DIR__ . "/storage/app/public/products/product_$i.jpg", 90);
}

echo "Sample images have been generated!\n";
