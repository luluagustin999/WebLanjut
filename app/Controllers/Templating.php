<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Templating extends BaseController
{
	public function __construct()
	{
		$this->userModel = new UserModel ();
	}
	public function index()
	{
	$data = [
		'title' => "Blog - Posts"
	];
	//echo view ('layout/header', $data);
	//echo view ('layout/navbar');
    //echo view ('v_post');
    //echo view ('layout/footer');
    return view('view_admin');
	}

	public function register()
	{
	$data = [
		'title' => "Register"
	];
	//echo view ('layout/header', $data);
	//echo view ('layout/navbar');
    //echo view ('v_post');
    //echo view ('layout/footer');
    return view('v_register', $data);
	}

	public function saveRegister()
	{
		$request = service('request');
		$data = [
			'fullname' => $request->getVar('fullname'),
			'email' => $request->getVar('email'),
			'password' => $request->getVar('Password'),
		];
		$this->userModel->insert($data);
		return redirect()->to('/register');
	}

}
