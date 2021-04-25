<?php

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redirect;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/contact', function () {
    $data = Input::all();
    $rules = array('subject' => 'required',
                    'message' => 'required');
    $validator = validate($data,$rules);
    if($validator->fails()) {
        return Redirect::to('contact')->withErrors($validator)->withInput();
    }
        return 'Your message has been sent';
});
