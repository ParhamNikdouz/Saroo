<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->boolean('gender')->nullable();
            $table->string('password');
            $table->integer('type_id')->unsigned();
            $table->string('avatar')->nullable();
            $table->string('email')->nullable();
            $table->boolean('notif_email');
            $table->string('mobile_number')->unique();
            $table->boolean('notif_mobile_number');
            $table->string('reference_code')->nullable();
            $table->text('description')->nullable();
            $table->string('national_code')->nullable();
            $table->string('identity_code')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->tinyInteger('city_id')->nullable();
            $table->tinyInteger('province_id')->nullable();
            $table->bigInteger('score')->default(0);
			$table->integer('confirmation_code')->nullable();
            $table->boolean('confirmed');
            $table->boolean('active_status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
