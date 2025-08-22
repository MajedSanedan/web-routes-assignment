<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function()
{
    return "This is the home page";
});

Route::get('/about',function()
{
    return "This is the about us page";
});

Route::get('/user/{id}',function($id)
{
    return "This is the Profile page of user with ID:".$id;
});

Route::get('/search',function(Request $request)
{
    $query = $request->input('q');

    if($query)
    return "You searched for: ".$query;
    
    else
    return "Please type a search term";  

});

Route::get('/grades', function () {
    return "Student Grades";
})->middleware('check.access');