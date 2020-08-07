<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Printers extends Model
{
    protected $fillable=array(
        'Branch','Vendor','IP'
    );
    protected $table='printer';
    protected $primaryKey='PrinterID';
}
