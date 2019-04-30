<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trip extends Model
{
    use SoftDeletes;



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
