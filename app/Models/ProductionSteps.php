<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionSteps extends Model
{
    public $table = 'productionsteps';
    protected $primaryKey = 'id_production_step';
    public $timestamps = false;   

}
