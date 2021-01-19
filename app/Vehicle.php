<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'Vehicle_Type','Price','Condition','Location','Image'
    ];
    public $table='vehicles';

    public function getUserVehicleRelation(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
