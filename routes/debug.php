<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/debug/images', function() {
    // Check storage link
    $storageLink = is_link(public_path('storage'));
    
    // Get product images
    $images = \App\Models\ProductImage::with('product')
        ->take(10)
        ->get()
        ->map(function($image) {
            return [
                'id' => $image->id,
                'product_id' => $image->product_id,
                'product_name' => $image->product->translation?->name ?? 'N/A',
                'image_url' => $image->image_url,
                'storage_url' => Storage::url($image->image_url),
                'file_exists' => Storage::exists($image->image_url),
                'type' => $image->type,
                'created_at' => $image->created_at,
            ];
        });
    
    // Check storage directories
    $directories = [
        'storage/app/public' => is_dir(storage_path('app/public')),
        'storage/app/public/products' => is_dir(storage_path('app/public/products')),
        'public/storage' => is_dir(public_path('storage')),
    ];
    
    // Check for any files in storage
    $files = [];
    if (is_dir(storage_path('app/public'))) {
        $files = array_slice(Storage::allFiles('public'), 0, 10);
    }
    
    return [
        'storage_link_exists' => $storageLink,
        'storage_directories' => $directories,
        'sample_images' => $images,
        'storage_files_sample' => $files,
    ];
});
