<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category\CategoryRepository;

class CategoryController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new CategoryRepository;
    }
    public function storeCategory(Request $request)
    {
        $request->validate(['category' => 'required|unique:categories,category_name']);
        $this->category->saveCategory($request->all());
        return redirect()->route('admin.category');
    }
}
