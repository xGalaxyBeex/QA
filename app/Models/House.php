<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    protected $fillable = ['name', 'price_per_sqm', 'year_built', 'floors_count'];
}
