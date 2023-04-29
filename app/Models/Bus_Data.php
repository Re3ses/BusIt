<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_Data extends Model
{
    use HasFactory;

    public function Bus_Trips(){
        return $this->hasMany(Bus_Trips::class);
    }
}
