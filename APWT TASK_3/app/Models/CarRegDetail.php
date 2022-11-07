<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarRegDetail extends Model
{
    public function product(){
        return $this->belongsTo(Product::class, 'Car_Reg_Details_Id','id');
    }
}
