<?php

namespace App\Http\Controllers;

use App\Repository\TestInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $testInt;
    public function __construct(TestInterface $testInts)
    {
        $this->testInt=$testInts;
    }
    public function get(){
        return $this->testInt->all();
    }
}
