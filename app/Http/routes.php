<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

  Route::get('competentiematrix/{specialisatie}',
    ['uses' => 'CompetentieController@getCompetentiematrix',
    'as' => 'competentiematrix']);

    Route::get('allcompetentiematrices',
      ['uses' => 'CompetentieController@viewAllMatrices',
      'as' => 'allcompetentiematrices']);

Route::post('competentiematrix/zoekModule',
    ['uses' => 'CompetentieController@getCompetentiematrixByModule',
    'as' => 'zoekModule']);

Route::post('competentiematrix/filterMatrix',
        ['uses' => 'CompetentieController@setCompetentieFilter',
        'as' => 'filterMatrix']);

Route::get('/dashboard',
        ['uses' => 'DashboardController@getLaraChart',
        'as' => 'dashboard']);

Route::get('/viewModules',
        ['uses' => 'ModuleController@viewModules',
        'as' => 'viewModules']);

Route::get('editmodule/{id}',
        ['uses' => 'ModuleController@editModule',
        'as' => 'editmodule']);

Route::put('editmodule/{id}',
        ['uses' => 'ModuleController@saveEditModule',
        'as' => 'editmodule']);

Route::get('newmodule',
        ['uses' => 'ModuleController@newModule',
        'as' => 'newmodule']);

Route::post('newmodule',
        ['uses' => 'ModuleController@saveNewModule',
        'as' => 'newmodule']);

Route::get('editmatrix/{modulecode}',
        ['uses' => 'CompetentieController@editMatrix',
        'as' => 'editmatrix']);

Route::put('editmatrix/{id}',
        ['uses' => 'CompetentieController@saveEditMatrix',
        'as' => 'editmatrix']);

Route::get('/viewEindeisen/{modulecode}',
        ['uses' => 'EindeisController@viewEindeisen',
        'as' => 'viewEindeisen']);
