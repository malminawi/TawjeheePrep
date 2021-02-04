<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student_dashboard', function () {
    $units = [
        ['unit' => '3', 'subject' => 'computer networks'],
        ['unit' => 'one', 'subject' => 'computers'],
        

    ];
    return view('student_dashboard', ['units' => $units]);
    
    //if we wanna return json
    //return ['name'=> 'test1', 'base' => 'test2'];
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
