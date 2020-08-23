<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->integer('CompID')->autoIncrement();
            $table->text('CompName');
            $table->text('IP');
            $table->text('Manufacturer');
            $table->text('Model');
            $table->text('OS');
            $table->text('AssTag');
            $table->text('Capacity');
            $table->text('Processor');
            $table->text('SN');
            $table->integer('branch');
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
        Schema::dropIfExists('computers');
    }
}
