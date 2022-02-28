<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrip extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'trip_id',
        'status',

    ];



    public function User()
    {
        return $this->belongsTo(Trip::class);
    }

    public function Driver()
    {
        return $this->hasMany(Trip::class);
    }
}