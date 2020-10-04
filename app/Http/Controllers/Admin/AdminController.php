<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category\CategoryRepository;
use App\Service\ServiceRepository;
use App\Item\ItemRepository;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->category = new CategoryRepository;
        $this->service  = new ServiceRepository;
        $this->item     = new ItemRepository;
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

    public function storeCategory(Request $request)
    {
        $request->validate(['category' => 'required|unique:categories,category_name']);
        $this->category->saveCategory($request->all());
        return redirect()->route('admin.category');
    }

    public function service()
    {
        $services = $this->service->getService();
        $items = $this->item->getItem();
        return view('admin.service', compact('services', 'items'));
    }

    public function storeService(Request $request)
    {
        $request->validate(['service' => 'required|unique:services,service_name']);
        $this->service->saveService($request->all());
        return redirect()->route('admin.service');
    }

    public function saveItem(Request $request)
    {
        $request->validate([
            'item' => 'required',
            'service_id' => 'required'
        ]);
        $this->item->saveItem($request->all());
        return redirect()->route('admin.service');
    }
}
