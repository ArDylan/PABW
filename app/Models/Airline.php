<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function flightSchedules()
    {
        return $this->hasMany(FlightSchedule::class);
    }
}
