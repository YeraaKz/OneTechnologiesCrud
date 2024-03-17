<?php

namespace App\Http\Controllers;

use App\Services\MyLogger;

class HomeController extends Controller
{

    public function index()
    {
        MyLogger::log('This is home page');

        return 1;
    }

}
