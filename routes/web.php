<?php

use App\Http\Livewire\ShowAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AddData;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('show-admin',ShowAdmin::class)->name('show');
Route::get('add-data',AddData::class)->name('add');
