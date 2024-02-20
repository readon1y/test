<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    
    public function dev_test() {
        $a = 5;
        $b = 6;
        $c = $a * $b;
    }
    
    public function dev_test_7() {
        echo "test 7";
    }
}
