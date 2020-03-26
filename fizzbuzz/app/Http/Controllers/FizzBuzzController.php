<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    /**
     * Check if is fizz or buzz
     *  
     * @return \Illuminate\Http\Response
     */
    function isFizzOrBuzz(){



        return ["result" => 'Fizz'];
    }
}
?>