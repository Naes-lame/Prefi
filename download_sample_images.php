<?php

// Sample image URLs
$sampleImages = [
    'sample-sneakers.jpg' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-jacket.jpg' => 'https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-laptop.jpg' => 'https://images.unsplash.com/photo-1526738549149-8f07a34f2334?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-phone.jpg' => 'https://images.unsplash.com/photo-1511707171639-5f897ff02aa9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-men.jpg' => 'https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-women.jpg' => 'https://images.unsplash.com/photo-1581044777550-4cfa60707c03?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-accessories.jpg' => 'https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
    'sample-sports.jpg' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80'
];

// Create directories if they don't exist
$sampleDir = __DIR__ . '/database/seeders/sample-images';
$publicDir = __DIR__ . '/public/images/categories';

if (!file_exists($sampleDir)) {
    mkdir($sampleDir, 0755, true);
}

if (!file_exists($publicDir)) {
    mkdir($publicDir, 0755, true);
}

// Download and save images
foreach ($sampleImages as $filename => $url) {
    $samplePath = $sampleDir . '/' . $filename;
    $publicPath = $publicDir . '/' . $filename;
    
    // Download the image
    $imageData = @file_get_contents($url);
    
    if ($imageData !== false) {
        // Save to sample-images directory
        file_put_contents($samplePath, $imageData);
        
        // Also save to public directory
        file_put_contents($publicPath, $imageData);
        
        echo "Downloaded and saved: $filename\n";
    } else {
        echo "Failed to download: $filename\n";
    }
}

echo "All images have been processed.\n";
