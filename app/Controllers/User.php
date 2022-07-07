<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		echo view('Layout/header.php');
		echo view('Layout/sidebar.php');
    echo view('Home/profile.php');
		echo view('Layout/footer.php');
	}
  
}
