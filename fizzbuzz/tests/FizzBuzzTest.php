<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Application\Service\fizzBuzzService;

class FizzBuzzTest extends TestCase
{

    /** Unit Testing */
    public function testFizzBuzzServiceFizz(){

        $service = new fizzBuzzService(6);
        $result = $service->getResult();
        $this->assertTrue( ($result==='Fizz') , "6 if Fizz");
    }


    public function testFizzBuzzServiceBuzz(){

        $service = new fizzBuzzService(5);
        $result = $service->getResult();
        $this->assertTrue( ($result==='Buzz') , "20 is Buzz");
    }

    public function testFizzBuzzServiceFizzBuzz(){

        $service = new fizzBuzzService(30);
        $result = $service->getResult();
        $this->assertTrue( ($result==='FizzBuzz') , "30 is FizzBuzz");
    }

    
    /** As an API Call */
    public function testZeroIfNotANumberJsonReq(){

        $response = $this->json('POST','/fizz-buzz', ['number' => 'asd231sa'])->seeStatusCode(200)->decodeResponseJson();
        $result = (int) $response["result"];
        $this->assertTrue( ($result===0) , "If not a number return zero");
    }


    public function testSameNumberIfNotDivibleBy3Or5JsonReq(){

        $response = $this->json('POST','/fizz-buzz', ['number' => 4])->seeStatusCode(200)->decodeResponseJson();
        $result = (int)$response["result"];
        $this->assertTrue( ($result===4), 'Is not divisible and return same number');
    }


    public function testFizzIfDivisibleBy3JsonReq(){

        $response = $this->json('POST','/fizz-buzz', ['number' => 3])->seeStatusCode(200)->decodeResponseJson();
        $result = $response["result"];
        $this->assertTrue( ($result=='Fizz'),"Three is divisble by 3: Is Fizz");
    }


    public function testBuzzIfDivisibleBy5JsonReq(){

        $response = $this->json('POST','/fizz-buzz', ['number' => 5])->seeStatusCode(200)->decodeResponseJson();
        $result = $response["result"];
        $this->assertTrue( ($result=='Buzz'),"Five is divisble by 5: Is Buzz");
    }


    public function testFizzBuzzIfDivisibleBy3And5JsonReq(){

        $response = $this->json('POST','/fizz-buzz', ['number' => 15])->seeStatusCode(200)->decodeResponseJson();
        $result = $response["result"];
        $this->assertTrue(($result=='FizzBuzz'),"15 is divisible by 3 and 5: Is FizzBuzz");
    }

}
