<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webpage;

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


Route::get('/aboutus',[Webpage::class, 'aboutUs']);
Route::get('/ourProcess',[Webpage::class,'ourProcess']);

