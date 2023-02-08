<?php

namespace App\Models;

use App\Enums\status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $filltable = [
        'client_id',
        'seller_id',
        'sold_at',
        'status',
        'total_amount'
    ];

    protected $casts = [
        'status' => status::class
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
