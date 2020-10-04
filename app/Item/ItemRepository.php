<?php

namespace App\Item;

class ItemRepository
{

  public function getItem()
  {
    return Item::all();
  }

  public function saveItem($req)
  {
    $data = Item::create([
      'item_name' => $req['item'],
      'service_id' => $req['service_id']
    ]);
  }
}
