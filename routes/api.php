<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Jela Svijeta
|--------------------------------------------------------------------------
|
| Ovdje su registrirane API rute za Jela Svijeta aplikaciju.. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get(trans('routes.about'), ['as' => 'about', 'uses' => 'PageController@getAboutPage']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
}); 
    Route::group(['prefix' => 'jela'],function(){ 
    Route::get( '/','JelaController@index');
    Route::get( '/find','SearchController@filter'); 
});
