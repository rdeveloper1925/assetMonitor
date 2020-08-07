<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwitchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('switches', function (Blueprint $table) {
            $table->integer('SwitchID')->autoIncrement();
            $table->text('SwitchName');
            $table->text('IP');
            $table->text('Manufacturer');
            $table->text('Model');
            $table->text('IOS');
            $table->text('RAM');
            $table->text('YearMake');
            $table->text('SN');
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
        Schema::dropIfExists('switches');
    }
}
