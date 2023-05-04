<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bus_Trips extends Model
{
    use HasFactory;

    public function Bus_Drivers(){
        return $this->belongsTo(Bus_Drivers::class, 'driver_id', 'id');
    }
    public function Bus_Data(){
        return $this->belongsTo(Bus_Data::class, 'bus_id', 'id');
    }
    public function Bus_Routes(){
        return $this->belongsTo(Bus_Routes::class, 'route_id', 'id');
    }
    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
