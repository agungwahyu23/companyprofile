<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	belumlogin();
	// }
	public function index()
	{
        $this->load->view('admin/login');
    }
}