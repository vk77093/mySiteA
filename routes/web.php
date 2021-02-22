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
    $title='Aaria-Chocolates';
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

Route::get('/contact-us',[Webpage::class,'contact']);
Route::post('/contact-us',[Webpage::class,'saveContact'])->name('contact-us.store');

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
Route::get('/fillings/dec-4832', [Fillings::class, 'dec4832']);
Route::get('/fillings/dec-4832/technical-specification-4832', [Fillings::class, 'tech4832']);

Route::get('/fillings/dec-4836', [Fillings::class, 'dec4836']);
Route::get('/fillings/dec-4836/technical-specification-4836', [Fillings::class, 'tech4836']);

Route::get('/fillings/dec-4839', [Fillings::class, 'dec4839']);
Route::get('/fillings/dec-4839/technical-specification-4839', [Fillings::class, 'tech4839']);

Route::get('/fillings/dec-4840', [Fillings::class, 'dec4840']);
Route::get('/fillings/dec-4840/technical-specification-4840', [Fillings::class, 'tech4840']);

Route::get('/fillings/dec-4841', [Fillings::class, 'dec4841']);
Route::get('/fillings/dec-4841/technical-specification-4841', [Fillings::class, 'tech4841']);

Route::get('/fillings/dec-4847', [Fillings::class, 'dec4847']);
Route::get('/fillings/dec-4847/technical-specification-4847', [Fillings::class, 'tech4847']);

Route::get('/fillings/dec-4854', [Fillings::class, 'dec4854']);
Route::get('/fillings/dec-4854/technical-specification-4854', [Fillings::class, 'tech4854']);

Route::get('/fillings/dec-4856', [Fillings::class, 'dec4856']);
Route::get('/fillings/dec-4856/technical-specification-4856', [Fillings::class, 'tech4856']);

Route::get('/fillings/dec-4858', [Fillings::class, 'dec4858']);
Route::get('/fillings/dec-4858/technical-specification-4858', [Fillings::class, 'tech4858']);

Route::get('/fillings/dec-4862', [Fillings::class, 'dec4862']);
Route::get('/fillings/dec-4862/technical-specification-4862', [Fillings::class, 'tech4862']);

Route::get('/fillings/dec-4864', [Fillings::class, 'dec4864']);
Route::get('/fillings/dec-4864/technical-specification-4864', [Fillings::class, 'tech4864']);


use App\Http\Controllers\Pastes;
Route::get('/pastes', [Pastes::class, 'pastes']);
Route::get('/pastes/dec-3380', [Pastes::class, 'dec3380']);
Route::get('/pastes/dec-3380/technical-specification-3380', [Pastes::class, 'tech3380']);

Route::get('/pastes/dec-6737', [Pastes::class, 'dec6737']);
Route::get('/pastes/dec-6737/technical-specification-6737', [Pastes::class, 'tech6737']);

