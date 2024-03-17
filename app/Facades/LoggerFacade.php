<?php

namespace App\Facades;

use App\Services\MyLogger;
use Illuminate\Support\Facades\Facade;

class LoggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Services\MyLogger';
    }

}
