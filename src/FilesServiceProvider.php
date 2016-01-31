<?php namespace Deminua\Files;

use Illuminate\Support\ServiceProvider;

class FilesServiceProvider extends ServiceProvider
{
	public function register()
	{
		 $this->app->bind('FilesController', function () {
	  	return new FilesController;
		});
	}

	public function boot(){
		require __DIR__ . '/routes.php';
	}
}
