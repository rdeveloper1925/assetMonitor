<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->integer('ServID')->autoIncrement();
            $table->text('ServName');
            $table->text('IP');
            $table->text('Manufacturer');
            $table->text('Model');
            $table->text('OS');
            $table->text('AssTag');
            $table->text('Capacity');
            $table->text('Processor');
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
        Schema::dropIfExists('servers');
    }
}
