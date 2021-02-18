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
    $title='Home-Page';
    return view('welcome',compact('title'));
});

use App\Http\Controllers\Webpage;
Route::get('/aboutus',[Webpage::class, 'aboutUs']);
Route::get('/ourProcess',[Webpage::class,'ourProcess']);
Route::get('/white-chocolates',[Webpage::class,'whiteChocolates']);
Route::get('/milk-chocolates',[Webpage::class,'milkChocolates']);
Route::get('/pastes',[Webpage::class, 'pastes']);
Route::get('/contact-us',[Webpage::class,'contact']);

use App\Http\Controllers\Darkchocolates;
Route::get('/dark-chocolates',[Darkchocolates::class,'dark']);

use App\Http\Controllers\Fillings;
Route::get('/fillings',[Fillings::class,'fillings']);

