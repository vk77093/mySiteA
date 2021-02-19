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
Route::get('/white-chocolates/dec-1608', [Webpage::class, 'dec1608']);
Route::get('/white-chocolates/dec-1608/technical-specification-1608', [Webpage::class, 'tech1608']);
Route::get('/milk-chocolates',[Webpage::class,'milkChocolates']);
Route::get('/milk-chocolates/dec-1506', [Webpage::class, 'dec1506']);
Route::get('/milk-chocolates/dec-1506/technical-specification-1506', [Webpage::class, 'tech1506']);
Route::get('/pastes',[Webpage::class, 'pastes']);
Route::get('/contact-us',[Webpage::class,'contact']);

use App\Http\Controllers\Darkchocolates;
Route::get('/dark-chocolates',[Darkchocolates::class,'dark']);
Route::get('/dark-chocolates/dec-1401',[DarkChocolates::class,'dec1401']);
Route::get('/dark-chocolates/dec-1401/technical-specification-1401', [DarkChocolates::class, 'tech1401']);

Route::get('/dark-chocolates/dec-1407', [DarkChocolates::class, 'dec1407']);
Route::get('/dark-chocolates/dec-1407/technical-specification-1407', [DarkChocolates::class, 'tech1407']);

Route::get('/dark-chocolates/dec-1413', [DarkChocolates::class, 'dec1413']);
Route::get('/dark-chocolates/dec-1413/technical-specification-1413', [DarkChocolates::class, 'tech1413']);

Route::get('/dark-chocolates/dec-1388', [DarkChocolates::class, 'dec1388']);
Route::get('/dark-chocolates/dec-1388/technical-specification-1388', [DarkChocolates::class, 'tech1388']);

Route::get('/dark-chocolates/dec-1406', [DarkChocolates::class, 'dec1406']);
Route::get('/dark-chocolates/dec-1406/technical-specification-1406', [DarkChocolates::class, 'tech1406']);

Route::get('/dark-chocolates/dec-1427', [DarkChocolates::class, 'dec1427']);
Route::get('/dark-chocolates/dec-1427/technical-specification-1427', [DarkChocolates::class, 'tech1427']);

Route::get('/dark-chocolates/dec-1440', [DarkChocolates::class, 'dec1440']);
Route::get('/dark-chocolates/dec-1440/technical-specification-1440', [DarkChocolates::class, 'tech1440']);

Route::get('/dark-chocolates/dec-1441', [DarkChocolates::class, 'dec1441']);
Route::get('/dark-chocolates/dec-1441/technical-specification-1441', [DarkChocolates::class, 'tech1441']);

Route::get('/dark-chocolates/dec-1442', [DarkChocolates::class, 'dec1442']);
Route::get('/dark-chocolates/dec-1442/technical-specification-1442', [DarkChocolates::class, 'tech1442']);

use App\Http\Controllers\Fillings;
Route::get('/fillings',[Fillings::class,'fillings']);

