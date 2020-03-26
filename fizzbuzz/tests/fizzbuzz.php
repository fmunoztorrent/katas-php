<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class fizzbuzz extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function isFizz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 3]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 'Fizz'
        ]);
    }


    public function isNotFizz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 2]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 2
        ]);
    }


    public function isBuzz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 5]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 'Buzz'
        ]);
    }

    public function isNotBuzz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 7]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 7
        ]);
    }


    public function isFizzBuzz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 15]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 'FizzBuzz'
        ]);
    }


    public function isNotFizzBuzz()
    {
        $response = $this->postJson('/fizz-buzz', ['number' => 16]);
        $response
            ->assertStatus(201)
            ->assertJson([
                'type' => 6
        ]);
    }
}
