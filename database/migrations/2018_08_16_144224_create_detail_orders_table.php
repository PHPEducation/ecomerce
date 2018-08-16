<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price', 11, 3);
            $table->integer('quantity');
            $table->integer('discount');
            $table->integer('order_id');
            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_orders');
    }
}
