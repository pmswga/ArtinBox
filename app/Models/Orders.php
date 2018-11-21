<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $table = 'orders';
    protected $primaryKey = 'id_order';
    public $timestamps = false;

    protected $fillable = [
        'id_box_type', 'sizes', 'create_date', 'id_author', 'id_order_status'
    ];

}
