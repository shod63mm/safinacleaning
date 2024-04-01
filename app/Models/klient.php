<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'adress',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
