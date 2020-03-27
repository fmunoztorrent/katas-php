<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;

// Application
use App\Application\Service\fizzBuzzService;

class FizzBuzzController extends Controller
{
    /**
     * Check if is fizz or buzz
     * 
     * @return \Illuminate\Http\Response
     */
    function isFizzOrBuzz(Request $request){

        $payload = $request->all();
        $fizzBuzzSrv = new fizzBuzzService( $payload["number"] );
        return ["result" => $fizzBuzzSrv->getResult() ];

    }
}
?>