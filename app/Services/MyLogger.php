<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class MyLogger
{
    public static function log($message)
    {
        Log::info($message);
    }
}
