<?php
 

Route::group(['prefix' => 'files', 'namespace' => 'Deminua\Files\Http\Controllers'], function () {
 
	Route::get('/', ['as' => 'files.index', 'uses' => 'FilesController@index']);
 
});
