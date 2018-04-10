<?php

namespace Onestartup\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add($a, $b){
    	$result = $a + $b;
		return view('calculatorio::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
