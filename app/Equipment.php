<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'email', 'Phone_Number','Equipment_Type','Price','Condition','Location','Image'
    ];
    public $table='equipments';

    public function getUserRelation(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
