<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printers extends Model
{
    protected $fillable=array(
        'branch','Vendor','IP'
    );
    protected $table='printer';
    protected $primaryKey='PrinterID';

    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
