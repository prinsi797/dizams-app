<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumePackage extends Model {
    use HasFactory;
    protected $fillable = [
        'title',
        'resume_count',
        'original_price',
        'discounted_price',
        'per_resume_price',
        'modal_type',
        'is_active'
    ];
}