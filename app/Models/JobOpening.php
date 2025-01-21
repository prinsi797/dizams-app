<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model {
    use HasFactory;
    protected $fillable = [
        'title',
        'location',
        'job_type',
        'category',
        'description',
        'requirements',
        'benefits',
        'is_active',
        'responsibilities',
        'company_name'
    ];
}
