<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Item\Item;
use App\Service\Service;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function jasaApi()
    {
        return response()->json(Service::with('item')->get());
    }
}
