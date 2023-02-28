<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function house()
    {
        return $this->belongsTo(House::class);
    }
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }
    protected $fillable = ['id', 'square_meters', 'floor',  'rooms', 'house_id'];
}
