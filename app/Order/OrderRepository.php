<?php

namespace App\Order;

class OrderRepository
{
  public function saveOrder($request)
  {
    // if ($request['order'] != 1 || $request['order'] != 2) {
    //   return response()->json([
    //     'status' => false,
    //     'message' => "Oops, you ordered what we didn't recognize"
    //   ]);
    // }
    try {
      $order = new Order;
      $order->order_code = '';
      $order->order_type = $request['order'];
      $order->full_name = $request['nama'];
      $order->phone_number = $request['tlp'];
      $order->email = $request['email'];
      $order->description = $request['keterangan'];
      $order->save();
      $order->order_code = "#J-Sc$order->id-$order->order_type";
      $order->save();
      return response()->json([
        'status' => true,
        'message' => 'Thakyou, your order has been processed'
      ]);
    } catch (\Throwable $th) {
      return response()->json([
        'status' => false,
        'message' => "Opps, $th"
      ]);
    }
  }
}
