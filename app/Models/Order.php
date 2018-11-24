<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';
    protected $primaryKey = 'id_order';
    public $timestamps = false;

    protected $fillable = [
        'id_box_type', 'sizes', 'create_date', 'id_author', 'id_order_status'
    ];


    public function getBoxType()
    {
        return $this->hasOne(BoxesType::class, 'id_box_type', 'id_box_type')->first()['caption'];
    }

    public function getSizes()
    {
        $json = json_decode($this->sizes, true);

        return $json;
        // return new class ($json) {
        //     private $json;

        //     public function __construct($json)
        //     {
        //         $this->json = $json;
        //     }

        //     public function getLenght()
        //     {
        //         return $this->json['L'];
        //     }

        // };
    }

    public function getCreateDate()
    {
        return date('d.m.Y', strtotime($this->create_date));
    }

}
