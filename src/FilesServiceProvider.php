<?php namespace Deminua\Files;

use Illuminate\Support\ServiceProvider;


class FilesServiceProvider extends ServiceProvider
{

/*
	public function register()
	{
		$this->app->bind('files', function () {
			#exit('just to verify laravel loads this file');
			return new Files;
			#return new FilesController();
			//return new Files();
		});
	}
	*/
	public function register()
	{
		 $this->app->bind('FilesController', function () {
	  	return new FilesController;
		});
	}



	public function boot(){
		require __DIR__ . '/routes.php';
		//include __DIR__.'/../routes.php';
		//require __DIR__ . '/Http/routes.php';
	}

}