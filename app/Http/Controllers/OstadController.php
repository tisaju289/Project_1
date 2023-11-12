<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    function sayHi(){
        return "hello laravel from hi";
    }

    function sayHello(){
        return "hello laravel from Hello";
    }
    function greet($name = "jon"){
        return "hello $name";
    }
}
