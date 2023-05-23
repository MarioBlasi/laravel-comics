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
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('characters', $data);
});

Route::get('/comics', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('comics', $data);
});

Route::get('/movies', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('movies', $data);
});
// primi 3
Route::get('/tv', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('tv', $data);
});

Route::get('/games', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('games', $data);
});

Route::get('/collectibles', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('contacts', $data);
});
// 6
Route::get('/videos', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('videos', $data);
});

Route::get('/fans', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('fans', $data);
});

Route::get('/news', function () {
    $data = [
        'page_title' => 'hello',
        'description' => 'lorem'
    ];
    return view('news', $data);
});
//9 
 // + 
// dropdown
