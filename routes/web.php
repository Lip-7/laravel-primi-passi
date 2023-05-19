<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/features', function () {
    return view('features');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/about', function () {
    $data = [
        'students' => [
            'Pdor', 'Ajeje Brazorf', 'Asdrubale'
        ],
        'teachers' => [
            'Clelia', 'Samuel', 'Marco'
        ]
    ];
    return view('about', $data);
});
