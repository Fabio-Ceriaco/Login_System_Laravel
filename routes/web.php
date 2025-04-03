<?php

use App\Classes\Tools;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', [Main::class, 'index'])->name('index');

Route::get('/login', [Main::class, 'login'])->name('login');

Route::post('/login_submit', [Main::class, 'login_submit'])->name('login_submit');

Route::get('/home', [Main::class, 'home'])->name('home');

Route::get('/logout', [main::class, 'logout'])->name('logout');
