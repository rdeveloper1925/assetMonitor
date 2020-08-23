<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routers extends Model
{
    protected $primaryKey='RouterID';
    protected $table='routers';
    protected $fillable=array(
        'RouterName','IP','Manufacturer','Model','IOS','RAM','YearMake','SN','branch'
    );

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
