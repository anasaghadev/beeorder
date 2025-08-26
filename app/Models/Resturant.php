<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    /** @use HasFactory<\Database\Factories\ResturantFactory> */
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }







}

