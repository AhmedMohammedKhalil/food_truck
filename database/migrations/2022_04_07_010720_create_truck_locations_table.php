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
        Schema::create('truck_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->text('streat');
            $table->string('block');
            $table->string('house');
            $table->integer('ft_id')->unsigned();
            $table->foreign('ft_id')
                ->references('id')->on('food_trucks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')
                ->references('id')->on('regions')
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
        Schema::dropIfExists('truck_locations');
    }
};
