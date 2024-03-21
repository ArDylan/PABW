<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function FlightSchedule()
    {
        return $this->hasMany(FlightSchedule::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function BookHotels()
    {
        return $this->hasMany(BookHotel::class);
    }
    

    public function userSaldo()
    {
        return $this->hasOne(UserSaldo::class);
    }

    public function userSaldoHistory()
    {
        return $this->hasMany(UserSaldoHistory::class);
    }
}
