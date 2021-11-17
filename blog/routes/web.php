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
    return view('index');
})->name('index');

/*Route::get('partners', function () {
    return view('partners');
})>name('partners');*/

Route::get('partners', 'App\Http\Controllers\PartnerController@partner_list')
    ->name('partners');


Route::get('invoices', function () {
    return view('invoices');
})->name('invoices');

Route::get('addform', function () {
    return view('add_partner_form');
})->name('addform');


Route::post('partner/add', 'App\Http\Controllers\AddPartnerController@add')
    ->name('partner.add');
