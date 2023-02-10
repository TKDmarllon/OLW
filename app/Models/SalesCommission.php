<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCommission extends Model
{
    use HasFactory;

    protected $table = "sales_comsission_view";
    public $incrementing = false;
    public $timestamps = false;
}
