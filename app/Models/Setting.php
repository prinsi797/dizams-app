<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
    use HasFactory;
    protected $fillable = ['keyword', 'value'];

    public static function getValueByKey($key) {
        $setting = self::where('keyword', $key)->first();
        return $setting ? $setting->value : null;
    }
}