<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPrice extends Model {
    use HasFactory;
    protected $table = 'orders_prices';
    protected $fillable = [
        'name',
        'amount',
        'discount',
    ];
    protected $primaryKey = 'id';
}
