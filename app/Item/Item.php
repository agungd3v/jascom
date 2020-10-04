<?php

namespace App\Item;

use App\Service\Service;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];
    protected $table = 'items';
    protected $primaryKey = 'id';

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
