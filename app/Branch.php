<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $primaryKey='id';
    protected $table='branches';
    protected $fillable=array(
        'branchName','location'
    );

    public function computers(){
        return $this->hasMany('App\Computer');
    }

    public function printers(){
        return $this->hasMany('App\Printers');
    }
    public function routers(){
        return $this->hasMany('App\Routers');
    }
    public function servers(){
        return $this->hasMany('App\Servers');
    }
    public function switches(){
        return $this->hasMany('App\Switches');
    }
}
