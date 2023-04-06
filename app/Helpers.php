<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('settings')) {
    function settings($key = null){
        // $settings = Setting::with('academic_session')->first();
        $settings = Cache::rememberForever('settings', function() {
            return Setting::all();
        });
        if ($key != null) {
            return $settings->where('key', $key)->first()->value;
        }
        return $settings;
    }
}

if (!function_exists('refresh_settings')) {
    function refresh_settings(){
        Cache::forever('settings', Setting::all());
    }
}