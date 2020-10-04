<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order\OrderRepository;

class UserController extends Controller
{
    protected $order;

    public function __construct()
    {
        $this->order = new OrderRepository;
    }

    // public function index()
    // {
    //     return view('user.app');
    // }

    public function order(Request $request)
    {
        return response()->json($this->order->saveOrder($request->all()));
    }
}
