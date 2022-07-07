<?php

namespace App\Controllers;

class Template extends BaseController
{
	public function index()
	{
		echo view('Layout/header.php');
		echo view('Layout/sidebar.php');
    echo view('Home/template.php');
		echo view('Layout/footer.php');
	}
  
}
