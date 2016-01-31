<?php
 

Route::group(['prefix' => 'files', 'namespace' => 'Deminua\Files\Http\Controllers'], function () {
 
	Route::get('/test', ['as' => 'files.index', 'uses' => 'FilesController@index']);
 
});
