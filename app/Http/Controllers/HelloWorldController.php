<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function hello($name)
    {
        return response()->json(['oi' => "Hello Controller {$name}", 'tchau' => "Bye Controller {$name}"]);
    }
}