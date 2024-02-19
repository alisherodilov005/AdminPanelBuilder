<?php
use App\Models\UserAlert;
use App\Models\User;
use Illuminate\Support\Facades\File;

if (!function_exists('my')) {
    function my()
    {
        return auth()->user();
    }
}