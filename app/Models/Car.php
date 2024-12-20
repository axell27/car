<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['make', 'model', 'year', 'price_per_day', 'status'];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
