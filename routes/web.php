<?php

use App\Livewire\Pages\Users;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Users::class)->name('users');
