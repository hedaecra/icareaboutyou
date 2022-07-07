<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('Layout/header.php');
		echo view('Layout/sidebar.php');
    echo view('Home/index.php');
		echo view('Layout/footer.php');
	}
  
  public function profile()
	{
		echo view('Layout/header.php');
		echo view('Layout/sidebar.php');
    echo view('Home/profile.php');
		echo view('Layout/footer.php');
	}
}
