<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];

    //table name doesn't match need to define in model.
   // protected $table = "New  Name of the table that ahs changed";
}
