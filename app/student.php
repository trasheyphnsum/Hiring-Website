<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = [
        'name', 'village'
    ];
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
