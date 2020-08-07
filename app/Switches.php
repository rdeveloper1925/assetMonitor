<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Switches extends Model
{
    protected $primaryKey='CompID';
    protected $table='computers';
    protected $fillable=array(
        'CompName','IP','Manufacturer','Model','OS','AssTag','Capacity','Processor','SN'
    );
}
