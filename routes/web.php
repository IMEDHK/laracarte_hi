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


use App\Mail\ContactMessageCreated;

Route::get('/about' ,
    [
        'as'=>'about_path',
        'uses'=>'PageController@about'

    ]);

Route::get('/contact' ,
    [
        'as'=>'contact_path',
        'uses'=>'ContactsController@create'

    ]);
Route::get('/' ,
    [
        'as'=>'root_path',
        'uses'=>'PageController@home'

    ]);
Route::get('/testmail' , function (){
    return new ContactMessageCreated('hakimi imed' ,'imedhkimi1@gmail.com','merci pour votre visite');
});

Route::post('/contact' ,
    [
        'as'=>'contact_path',
        'uses'=>'ContactsController@store'

    ]);