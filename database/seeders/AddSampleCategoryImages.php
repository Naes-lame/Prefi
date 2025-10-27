<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AddSampleCategoryImages extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the categories directory if it doesn't exist
        $categoriesDir = public_path('images/categories');
        if (!File::exists($categoriesDir)) {
            File::makeDirectory($categoriesDir, 0755, true);
        }

        // Sample images from local storage
        $sampleImages = [
            'footwear' => 'sample-sneakers.jpg',
            'streetwear' => 'sample-jacket.jpg',
            'electronics' => 'sample-laptop.jpg',
            'smartphones' => 'sample-phone.jpg',
            'men' => 'sample-men.jpg',
            'women' => 'sample-women.jpg',
            'accessories' => 'sample-accessories.jpg',
            'sports' => 'sample-sports.jpg'
        ];
        
        // Copy sample images to public directory
        $sampleImagesDir = base_path('database/seeders/sample-images');
        $publicImagesDir = public_path('images/categories');
        
        if (!File::exists($publicImagesDir)) {
            File::makeDirectory($publicImagesDir, 0755, true);
        }

        // Get all categories
        $categories = Category::all();

        foreach ($categories as $category) {
            $slug = strtolower($category->slug);
            
            // If we have a matching image for this category
            if (array_key_exists($slug, $sampleImages)) {
                $imageName = $sampleImages[$slug];
                $sourcePath = $sampleImagesDir . '/' . $imageName;
                $destPath = $publicImagesDir . '/' . $imageName;
                
                // Copy the sample image
                if (File::exists($sourcePath)) {
                    File::copy($sourcePath, $destPath);
                    
                    // Update the category with the image path
                    $category->update([
                        'image' => 'categories/' . $imageName
                    ]);
                    
                    $this->command->info("Added image for category: {$category->name}");
                } else {
                    $this->command->error("Sample image not found for category: {$category->name}");
                }
            }
        }
        
        $this->command->info('Category images have been added successfully!');
    }
}
