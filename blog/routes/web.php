<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\PDFController;

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

Route::get('partner/edit-form/{id}', 'App\Http\Controllers\PartnerController@editform')
    ->name('partner.editform');

Route::get('confirmation/{id}', 'App\Http\Controllers\ConfirmationController@confirmation')
->name('confirmation');


Route::post('partner/add', 'App\Http\Controllers\PartnerController@add')
    ->name('partner.add');

Route::put('partner/edit/{id}', 'App\Http\Controllers\PartnerController@edit')
    ->name('partner.edit');

Route::delete('partner/delete/{id}', 'App\Http\Controllers\PartnerController@delete')
    ->name('partner.delete');

/*Route::get('invoices/download', 'App\Http\Controllers\PDFController@download');*/

Route::get('pdf/preview', 'App\Http\Controllers\PDFController@preview')->name('pdf.preview');
Route::get('pdf/generate', 'App\Http\Controllers\PDFController@generatePDF')->name('pdf.generate');