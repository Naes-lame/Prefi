<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'footwear' => 'categories/footwear.jpg',
            'streetwear' => 'categories/streetwear.jpg',
            'electronics' => 'categories/electronics.jpg',
            'smartphones' => 'categories/smartphones.jpg',
        ];

        foreach ($categories as $slug => $image) {
            $category = Category::where('slug', $slug)->first();
            if ($category) {
                $category->update(['image' => $image]);
            }
        }
    }
}
