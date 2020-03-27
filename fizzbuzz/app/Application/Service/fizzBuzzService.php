<?php
namespace App\Application\Service;

class FizzBuzzService {

    private $number = 0;
    
    function __construct($number){
        $this->number = $number;
    }

    public function getResult(){

        if( !is_numeric($this->number) ){
            return 0;
        }

        $this->number == (int) $this->number;

        if($this->number % 3 === 0 && $this->number % 5 === 0){
            return 'FizzBuzz';
        }

        if($this->number % 3 === 0){
            return 'Fizz';
        }

        if($this->number % 5 === 0){
            return 'Buzz';
        }

        return $this->number;

    }

}
?>