<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // active_trips
    //protected $table = "trips";
//    protected $primaryKey = "s_id";


    // category // bookings // user

    public function category() {
        return $this->belongsTo("App\Category", "category_id");
    }

    public function bookings() {
        return $this->hasMany("App\Booking");
    }

    public function user() {
        return $this->belongsTo("App\User");
    }

}
