<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status')->default(0);
            $table->string('phone',8);
            $table->string('license_no',100);
            $table->text('facebook')->nullable();
            $table->text('description');
            $table->text('worktime');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('food_trucks');
    }
};
