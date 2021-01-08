<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable = [
        'Name','Email' ,'Phone_Number','User_Name','Password','retype_password',
    ];
    public $table='registers';
}
 