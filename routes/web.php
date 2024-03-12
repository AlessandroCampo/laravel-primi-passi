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
    $navbar_voices = [
        'HomePage' => [
            'link' => '/'
        ],
        'About-us' => [
            'link' => 'about'
        ]
    ];
    $location = '/';

    return view('Home', compact('navbar_voices', 'location'));
});

Route::get('/about', function () {
    $navbar_voices = [
        'HomePage' => [
            'link' => '/'
        ],
        'About-us' => [
            'link' => 'about'
        ]
    ];
    $location = 'about';
    return view('About_us', compact('navbar_voices', 'location'));
});
