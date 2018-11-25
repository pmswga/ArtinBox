<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsType extends Migration
{
    public function up()
    {
        Schema::create('materialstype', function (Blueprint $table) {
            $table->increments('id_material_type');
            $table->json('material');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('materialstype');
    }
}
