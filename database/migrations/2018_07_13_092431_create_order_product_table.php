<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number');
            $table->integer('user_id');
            $table->integer('product_id')->unsigned();
            $table->string('total_price')->nullable();
            $table->boolean('cancelled');
            $table->dateTime('cancelled_date')->nullable();
            $table->boolean('payment_status');
            $table->boolean('final_submit_status');
            $table->boolean('send_status');
            $table->boolean('rate_status');
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
