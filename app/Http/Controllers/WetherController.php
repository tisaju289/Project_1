<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WetherController extends Controller
{
    function wether(){
        $location =[
            "address"=> "feni",
            "vill"=> "west bijoy sing",
            "thana" => "feni sadar"
        ];
        return $location;
    }
}
