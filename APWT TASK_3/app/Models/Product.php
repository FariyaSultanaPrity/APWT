<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catagory(){
        return $this->belongsTo(Catagory::class, 'id','Category_Id');
    }

    public function carRegDetails(){
        return $this->belongsTo(Car_Reg_Details::class, 'id','Car_Reg_Details_Id');
    }

    
}
