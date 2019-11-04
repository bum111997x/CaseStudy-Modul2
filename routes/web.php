<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/','IndexController@index')->name('model.index');
Route::get('description/{id}',"IndexController@description")->name('model.description');
Route::get('rank','IndexController@rank')->name('model.rank');


Route::prefix('model')->group(function (){
    Route::get('manager','MaleController@manager')->name('model.manager');
    Route::get('create',"MaleController@create")->name('model.create');
    Route::post('create',"MaleController@store")->name('model.store');
    Route::get('delete/{id}',"MaleController@delete")->name('model.delete');
    Route::get('edit/{id}','MaleController@edit')->name('model.edit');
    Route::post('edit/{id}','MaleController@update')->name('model.update');
    Route::get('search',"MaleController@search")->name('model.search');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
