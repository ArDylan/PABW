<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSchedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }

    public function bookTiket()
    {
        return $this->hasMany(BookTiket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
