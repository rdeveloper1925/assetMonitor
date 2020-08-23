<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    protected $primaryKey='ServId';
    protected $table='servers';
    protected $fillable=array(
        'ServName','IP','Manufacturer','Model','OS','AssTag','Capacity','Processor','SN','branch'
    );

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
