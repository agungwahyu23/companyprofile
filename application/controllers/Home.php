<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Ubelumlogin();
    }

    public function index()
    {
        $this->load->view('user/Templates/header');
        $this->load->view('user/Home/index');
        $this->load->view('user/Templates/footer');
    }
}
