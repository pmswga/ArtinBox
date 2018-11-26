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
        return json_decode($this->sizes, true);
    }

    public function getAuthor()
    {
        return $this::hasOne('App\User', 'id_user', 'id_author')->first()['name'];
    }
    
    public function getMaster()
    {
        return $this::hasOne('App\User', 'id_user', 'id_master')->first()['name'];
    }

    public function getCreateDate()
    {
        return date('d.m.Y', strtotime($this->create_date));
    }

    public function getProcessTime()
    {
        if (($this->start_date != null) && ($this->finish_date != null)) {
            return date('h:i:s', strtotime($this->finish_date) - strtotime($this->start_date));
        } else {
            return 0;
        }
    }

    public function getStartDate()
    {
        return date('d.m.Y h:i:s', strtotime($this->start_date));
    }

    public function getFinishDate()
    {
        if ($this->finish_date != null) {
            return date('d.m.Y h:i:s', strtotime($this->finish_date));
        }
    }

}
