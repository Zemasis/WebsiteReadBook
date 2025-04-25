<?php

use App\Http\Controllers\AuthController;
use App\Models\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('homepage.index');
});

Route::get('/homepage', function () {
    return view('homepage.index');
})->name('homepage.index');


Route::post('/auth/register', [AuthController::class, 'store'])->name('register');

Route::get('/Admin',function(){
    return view('Admin', ['section' => 'dashboard']);
})->name('Admin');



Route::get('/Admin/{section}', function ($section) {
    return view('Admin', ['section' => $section]);
});

Route::get('/AdminCarvan',function(){
    return view('Admin1');
})->name('AdminCarvan');
