<?php

namespace App\Services\Admin;

use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Admin\Category\CategoryRepositoryInterface;
use App\Models\Category;
class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function getCategoriesForDataTable($request)
    {
          
    $categories = $this->categoryRepository->all()->load('translations'); 

    return DataTables::of($categories)
        ->addColumn('name', function ($category) {
            $translation = $category->translations->firstWhere('language_code', 'en'); 
            return $translation ? $translation->name : 'No name available';
        })
        ->addColumn('description', function ($category) {
            $translation = $category->translations->firstWhere('language_code', 'en');
            return $translation ? $translation->description : 'No description available';
        })
        ->addColumn('action', function ($category) {
            return '
                <a href="' . route('admin.categories.edit', $category->id) . '" class="btn btn-primary btn-sm">Edit</a>
                <form action="' . route('admin.categories.destroy', $category->id) . '" method="POST" class="d-inline" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
                    ' . csrf_field() . '
                    ' . method_field('DELETE') . '
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>';
        })
        ->rawColumns(['action'])  
        ->make(true); 
    }

    /**
     * Store a newly created category.
     */
    public function store($request)
    {
        $validatedData = $request->validate([
            'translations.*.name' => 'required|string|max:255',
            'translations.*.description' => 'nullable|string',
        ]);
    
        // Create the category
        $category = new Category();
        $category->status = true; // Default status
        
        // Handle category image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Create the directory if it doesn't exist
            $path = public_path('images/categories');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            // Move the uploaded file
            $image->move($path, $imageName);
            
            // Set the image path
            $category->image = 'categories/' . $imageName;
        }
        
        $category->save();
        
        // Save translations
        foreach ($request->translations as $languageCode => $translation) {
            $category->translations()->updateOrCreate(
                ['language_code' => $languageCode],
                [
                    'name' => $translation['name'],
                    'description' => $translation['description'] ?? null,
                ]
            );
        }
        
        return $category;
    }
    
    /**
     * Uploads an image and returns the full storage URL.
     */
    private function uploadImage($image)
    {
        $fileName = time() . '_' . $image->getClientOriginalName();
        $path = $image->storeAs('categories', $fileName, 'public'); 
        return 'storage/' . $path; // Ensure it's publicly accessible
    
    }
    
    
   
    /**
     * Update an existing category.
     */
    public function update($request, $id)
    {
        $category = Category::findOrFail($id);

        // Handle category image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            
            // Create the directory if it doesn't exist
            $path = public_path('images/categories');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            
            // Move the uploaded file
            $image->move($path, $imageName);
            
            // Update the category with the new image path
            $category->update([
                'image' => 'categories/' . $imageName
            ]);
        }

        $validatedData = $request->validate([
            'translations.*.name' => 'required|string|max:255',
            'translations.*.description' => 'nullable|string',
            'translations.*.image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
    
        return $this->categoryRepository->updateWithTranslations($category, $request->translations);
    }

    /**
     * Delete an existing category.
     */
    public function destroy($id)
    {
        // Call the repository to delete the category
        return $this->categoryRepository->destroy($id);
    }

    /**
     * Find a category by its ID.
     */
    public function find($id)
    {
        // Call the repository to find the category by ID
        return $this->categoryRepository->find($id);
    }
}
