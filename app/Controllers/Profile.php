<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;

class Profile extends Controller
{
	public function index()
	{	
		echo view('header');
		echo view('profile');
	}
}
