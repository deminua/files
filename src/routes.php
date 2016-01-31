<?php
 
 Route::get('/files-index', ['as' => 'files.index', 'uses' => 'FilesController@index']);
 
Route::group(['prefix' => 'files', 'namespace' => 'Deminua\Files\Http\Controllers'], function () {
 
	Route::get('/test', ['as' => 'files.index', 'uses' => 'FilesController@index']);
 
});

/*
Route::get('/xxx', function () {
    return 'good test';
});
*/
