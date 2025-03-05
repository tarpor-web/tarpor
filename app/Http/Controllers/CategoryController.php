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
}
