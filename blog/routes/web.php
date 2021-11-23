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
/*Route::name('partners')->group(function () {

});*/

Route::get('partners', 'App\Http\Controllers\PartnerController@index')
    ->name('partners.index');

Route::get('partners/create', 'App\Http\Controllers\PartnerController@create')
    ->name('partners.create');

Route::post('partners/store', 'App\Http\Controllers\PartnerController@store')
    ->name('partners.store');

/*Route::get('partners/{id}', 'App\Http\Controllers\PartnerController@show')
    ->name('partners.show');*/

Route::get('partners/{id}/edit', 'App\Http\Controllers\PartnerController@edit')
    ->name('partners.edit');

Route::put('partners/{id}', 'App\Http\Controllers\PartnerController@update')
    ->name('partners.update');

Route::delete('partners/{id}', 'App\Http\Controllers\PartnerController@destroy')
    ->name('partners.destroy');


Route::get('invoices', function () {
    return view('invoices');
})->name('invoices');



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
