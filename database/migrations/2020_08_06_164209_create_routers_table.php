<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function (Blueprint $table) {
            $table->integer('RouterId')->autoIncrement();
            $table->text('RouterName');
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
        Schema::dropIfExists('routers');
    }
}
