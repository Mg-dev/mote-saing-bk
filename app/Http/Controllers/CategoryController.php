<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function getCategories() {
        // dd('hi');
        $categories = Category::get();
        return response()->json($categories);
    }
}
