<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('id_box_type')->unsigned();
            $table->json('sizes');
            $table->datetime('create_date');
            $table->integer('id_author')->unsigned();
            $table->integer('id_order_status')->unsigned();
            $table->integer('id_master')->nullable()->unsigned();
            $table->integer('id_production_step')->nullable()->unsigned();
            $table->datetime('start_date')->nullable();
            $table->datetime('finish_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
