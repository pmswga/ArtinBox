<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialsType extends Model
{
    
    public $table = 'materialstype';
    protected $primaryKey = 'id_material_type';

    public function getMaterial($material)
    {
        $json = json_decode($this->material, true);
        return json_encode($json[$material]);
    }

    public function getData()
    {
        return json_decode($this->material, true);
    }

}
