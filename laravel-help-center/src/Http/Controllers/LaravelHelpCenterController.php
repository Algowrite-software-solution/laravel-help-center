<?php

namespace Algowrite\LaravelHelpCenter\Http\Controllers;

use Illuminate\Routing\Controller;

class LaravelHelpCenterController extends Controller
{
    public function index()
    {
        return config('laravel-help-center-package.message');
    }
}