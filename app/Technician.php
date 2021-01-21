<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $fillable = [
        'Experince','Type_of_Technician','Qualification', 'Service_charge','Location','Image'
    ];
}
