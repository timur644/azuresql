<?php




//показ формы 
Route::get('/table/form',   'TableController@show');  // идёт к методу show

//данные через post метод попадёт в метод create
Route::post('/table/create', 'TableController@create'); 

