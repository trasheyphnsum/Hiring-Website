<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'email', 'Phone_Number','Equipment_Type','Price','Condition','Location','Image'
    ];
    public $table='equipments';
}
