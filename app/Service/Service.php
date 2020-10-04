<?php

namespace App\Service;

use App\Item\Item;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    protected $table = 'services';
    protected $primaryKey = 'id';

    public function item()
    {
        return $this->hasMany(Item::class, 'service_id', 'id');
    }
}
