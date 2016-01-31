<?php namespace Deminua\Files\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
class FilesController extends Controller
{
 
	public function index()
	{
		return response("Hello! This is Files package.");
	}
 
}