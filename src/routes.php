<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Onestartup\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Onestartup\Calculator\CalculatorController@subtract');