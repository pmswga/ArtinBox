<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionSteps extends Migration
{
    public function up()
    {
        Schema::create('productionsteps', function (Blueprint $table) {
            $table->increments('id_production_step');
            $table->integer('id_box_type');
            $table->integer('id_step');
            // $table->primary(['id_production_step', 'id_box_type']);
            // $table->foreign('id_box_type')->reference('id_box_type')->on('boxestype');
            $table->string('caption');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('productionsteps');
    }
}
