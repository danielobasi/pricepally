<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\Deals;
use App\Http\Livewire\PallyItems;
use App\Http\Livewire\RecommendedItems;
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

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/search',[PagesController::class,'search'])->name('search');


