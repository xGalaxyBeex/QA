<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['id', 'sale_date', 'client_id', 'apartment_id', 'house_id', 'price_per_sqm'];

    public function apartments()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
