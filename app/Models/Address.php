<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $filltable = [
        'city',
        'state'
    ];

    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
