<?php

namespace App\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';
    protected $primaryKey = 'id';
}
