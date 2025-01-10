<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnSubscribe extends Model
{
    use HasFactory;
    protected $table = 'unsubscribes'; 
    protected $fillable = ['name', 'email', 'reason'];
}
