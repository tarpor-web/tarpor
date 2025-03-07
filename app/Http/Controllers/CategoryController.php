<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('children')->get();
        $tree = $this->buildCategoryTree();

        return view('dashboard.admin.category.index', compact('categories', 'tree'));
    }

    private function buildCategoryTree($parentId = null)
    {
        return Category::where('parent_id', $parentId)
            ->with('children')
            ->get()
            ->map(function ($category) {
                $category->children = $this->buildCategoryTree($category->id);
                return $category;
            });
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $parentCategories = Category::get(); // Correct usage of get()
        return view('dashboard.admin.category.create', compact('parentCategories'));
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'nullable|string|max:255|unique:categories,slug',
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|in:active,inactive',
        ]);

        // Create the category
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name), // Generate slug if not provided
            'parent_id' => $request->parent_id,
            'status' => $request->status,
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    /**
     * Show the form for editing an existing category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        $parentCategories = Category::whereNull('parent_id')->where('id', '!=', $category->id)->get(); // Exclude current category from parent options
        return view('dashboard.admin.category.edit', compact('category', 'parentCategories'));
    }
    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'slug' => 'nullable|string|max:255|unique:categories,slug,' . $category->id,
            'parent_id' => 'nullable|exists:categories,id',
            'status' => 'required|in:active,inactive',
        ]);

        // Update the category
        $category->update([
            'name' => $request->name,
            'slug' => $request->slug ?? Str::slug($request->name), // Generate slug if not provided
            'parent_id' => $request->parent_id,
            'status' => $request->status,
        ]);

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        // Ensure the category has no children before deleting
        if ($category->children->isEmpty()) {
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
        }

        return redirect()->route('category.index')->with('error', 'Cannot delete category with subcategories.');
    }

    public function checkSlug(Request $request)
    {
        $slug = $request->query('slug');
        $currentSlug = $request->query('current_slug');

        // Check if the slug exists, excluding the current slug
        $exists = Category::where('slug', $slug)
            ->when($currentSlug, function ($query, $currentSlug) {
                return $query->where('slug', '!=', $currentSlug);
            })
            ->exists();

        if ($exists) {
            // Generate a unique slug by appending a number (e.g., iphone-13-1, iphone-13-2)
            $suggestedSlug = $this->generateUniqueSlug($slug, $currentSlug);

            return response()->json([
                'exists' => true,
                'suggested' => $suggestedSlug,
            ]);
        }

        return response()->json([
            'exists' => false,
        ]);
    }

    /**
     * Generate a unique slug by appending a number to the existing slug.
     *
     * @param string $slug
     * @param string|null $currentSlug
     * @return string
     */
    private function generateUniqueSlug($slug, $currentSlug = null)
    {
        $baseSlug = $slug; // Use the original slug as the base
        $counter = 1;

        // Generate a new slug and check if it exists
        do {
            $newSlug = $baseSlug . '-' . $counter; // Append a number (e.g., iphone-13-1)
            $exists = Category::where('slug', $newSlug)
                ->when($currentSlug, function ($query, $currentSlug) {
                    return $query->where('slug', '!=', $currentSlug);
                })
                ->exists();
            $counter++;
        } while ($exists);

        return $newSlug;
    }

}
