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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('entreprises','Entreprisescontroller');

Route::resource('clients','ClientsController');

Route::resource('agences','AgencesController');


Route::resource('cars','CarsController');
Route::resource('reservations','ReservationsController');

Route::get('/search','SearchController@search')->name('search');

Route::get('/agences/{id}/cars/add',function ($id){
    return view('Cars.cars_add')->with('agency',\App\models\Agence::find($id));
});

Route::get('api/dropdown', function(){
    $input = \Illuminate\Support\Facades\Input::get('option');
    $brand = \App\models\brand::find($input);
    $models = $brand->carModels();
    return Response::make($models->get(['id','car_model_name']));
});


Route::get('contact', 'SendEmailController@index')->name('index');
Route::post('contact', 'SendEmailController@send')->name('send');
