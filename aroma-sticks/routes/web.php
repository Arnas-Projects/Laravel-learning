<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController as Home;
use App\Http\Controllers\PostFormSumController as PostSum;
use App\Http\Controllers\NumStorageController as NumStore;

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
    return view('welcome');
});

Route::get('/homepage', [Home::class, 'initiateHomepage']);


// ======= ND =======

/*
    Padaryti sumatorių, kuris yra POST forma.
    Į formą suvedus 8 ir 9
    Atsakyme rodytų "8 + 9 = 17".
    Po post metodo turi būti redirectas.
    Reikia naujo kontrolerio, metodų, routų ir blade failų.
*/

/*
    Padaryti surinkėją, kuris yra POST forma.
    Į formą suvedus skaičių 7 
    rodytų 7

    Dar kartą į formą suvedus skaičių 9
    rodytų 7 9

    Dar kartą į formą suvedus skaičių 10
    rodytų 7 9 10

    Reikia naujo kontrolerio, metodų, routų ir blade failų.

    PAPILDOMAI: Galima padaryti mygtuką, kuris viską ištrina
*/

// 1 užduotis
Route::get('/post', [PostSum::class, 'showSumPostForm']);
Route::post('/post-sum', [PostSum::class, 'countSumPostForm'])->name('count-sum');
Route::get('/post-sum', [PostSum::class, 'showCountedSum'])->name('show-result');


// 2 užduotis
Route::get('/show-form', [NumStore::class, 'showStorageForm'])->name('forma-titulinis');
Route::post('/post-storage', [NumStore::class, 'storeNumber'])->name('store-number');
Route::get('/post-storage', [NumStore::class, 'showNumbers'])->name('show-numbers');

Route::post('/post-clear-storage', [NumStore::class, 'clearNumbers'])->name('clear-numbers');



Route::get('/clear-session', function () {
    session()->forget('numbers');
    return 'Session cleared';
});