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
            $table->integer('id_box_type');
            $table->json('sizes');
            $table->datetime('create_date');
            $table->integer('id_author');
            $table->integer('id_order_status');
            $table->integer('id_master')->default(0);
            $table->integer('id_production_step')->default(0);
            $table->datetime('start_date')->default('1970-01-01');
            $table->datetime('finish_date')->default('1970-01-01');
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
