<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'Type_of_Driver','Experince','License_Type', 'Service_charge','Location','Image'
    ];
}
