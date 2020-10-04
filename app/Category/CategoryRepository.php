<?php

namespace App\Category;

class CategoryRepository
{

  public function getCategory()
  {
    return Category::all();
  }

  public function saveCategory($req)
  {
    $data = Category::create([
      'category_name' => $req['category'],
      'is_active' => 1
    ]);
    return $data;
  }
}
