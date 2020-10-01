<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category\CategoryRepository;

class AdminController extends Controller
{
    protected $category;

    public function __construct()
    {
        $this->category = new CategoryRepository;
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function category()
    {
        $categories = $this->category->getCategory();
        return view('admin.category', compact('categories'));
    }
}
