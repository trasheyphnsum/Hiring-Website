<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{  
    protected $fillable = [
        'Experince','Type_of_Guide', 'Qualification','Service_charge','Location','Image'
    ];  
}
