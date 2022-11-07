<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function address(){
        return $this->belongsTo(Address::class, 'id','U_AddressId');
    }
}
