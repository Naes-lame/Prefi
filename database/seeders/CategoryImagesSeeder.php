<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CategoryImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create categories directory if it doesn't exist
        $publicPath = public_path('images/categories');
        if (!File::exists($publicPath)) {
            File::makeDirectory($publicPath, 0755, true);
        }

        // Sample images from placehold.co
        $sampleImages = [
            'footwear' => 'https://placehold.co/600x400/4F46E5/FFFFFF?text=Footwear',
            'streetwear' => 'https://placehold.co/600x400/10B981/FFFFFF?text=Streetwear',
            'electronics' => 'https://placehold.co/600x400/F59E0B/FFFFFF?text=Electronics',
            'smartphones' => 'https://placehold.co/600x400/EF4444/FFFFFF?text=Smartphones',
            'men' => 'https://placehold.co/600x400/8B5CF6/FFFFFF?text=Men',
            'women' => 'https://placehold.co/600x400/EC4899/FFFFFF?text=Women',
            'accessories' => 'https://placehold.co/600x400/14B8A6/FFFFFF?text=Accessories',
            'sports' => 'https://placehold.co/600x400/F97316/FFFFFF?text=Sports'
        ];

        // Update categories with image paths
        foreach ($sampleImages as $slug => $imageUrl) {
            $category = Category::where('slug', $slug)->first();
            
            if ($category) {
                // Download and save the image
                $imageName = $slug . '.jpg';
                $imagePath = $publicPath . '/' . $imageName;
                
                // Save the image
                $imageData = @file_get_contents($imageUrl);
                
                if ($imageData !== false) {
                    file_put_contents($imagePath, $imageData);
                    
                    // Update the category with the image path
                    $category->update([
                        'image' => 'categories/' . $imageName
                    ]);
                    
                    $this->command->info("Added image for category: {$category->name}");
                } else {
                    $this->command->error("Failed to download image for category: {$category->name}");
                }
            }
        }
        
        $this->command->info('Category images have been added successfully!');
    }
}
