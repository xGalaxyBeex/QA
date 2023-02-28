<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
    protected $fillable = ['full_name', 'phone_number',  'email'];
}
