<?php 

namespace App\Test;

class Test {

    public function __construct(public array $confing) {}
    
    public function foo(){
        return 'bar';
    }
}
