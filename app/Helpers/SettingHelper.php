<?php

use App\Models\Setting;

if (!function_exists('get_setting')) {
    function get_setting($key) {
        $setting = Setting::where('keyword', $key)->first();
        return $setting ? $setting->value : null;
    }
}