<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function bookHotel()
    {
        return $this->hasMany(BookHotel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
