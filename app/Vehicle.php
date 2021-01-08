<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'email', 'Phone_Number','Vehicle_Type','Price','Condition','Location','Image'
    ];
    public $table='vehicles';
}
