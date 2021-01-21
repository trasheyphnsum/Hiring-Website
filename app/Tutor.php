<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{ 
    protected $fillable = [
        'Experince','Qualification','Service_charge','Location','Image'
    ];  

    public $table='tutors';

    public function getUserTutorRelation(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
