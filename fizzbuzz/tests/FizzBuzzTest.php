<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FizzBuzzTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFizz()
    {
        $response = $this->json('POST','/fizz-buzz', ['number' => 3])->seeStatusCode(200)->decodeResponseJson();
        $result = $response["result"];
        if($result=='Fizz'){
            $this->assertTrue(true);
        } else {
            $this->assertTrue(false);
        }
    }
}
