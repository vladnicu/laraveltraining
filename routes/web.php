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


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
]);

Route::post('/mailing', [
    'as' => 'mailing.create',
    'uses' => 'MailingController@create',
]);

Route::get('/api/subscribers', [
    'as' => 'api.subscribers',
    'uses' => 'SubscriberController@index',
]);

// Route::post('/', [
//     'uses' => 'HomeController@create',
// ]);

// Route::get('/', function () {
//     return redirect()->route('landing');
// });

// Route::get('/landing/test', function () {
//     echo 'landing';
// })->name('landing');


// Route::group(['prefix' => '/account'], function() {
   
//     Route::get('change-password', function () {
//         echo 'change-password';
//     });

//     Route::get('edit-profile', function () {
//         echo 'edit';
//     });

// });


// Route::get('/user/{id}', function ($id) {
//     echo $id;
// });
