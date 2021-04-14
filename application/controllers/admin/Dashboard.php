<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		belumlogin();
	}

	public function index()
	{
		// var_dump($this->session->userdata('idPengguna'));die;
        $this->load->view('admin/dashboard');
    }
}