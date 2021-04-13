<?php

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Ubelumlogin();
    }

    public function index()
    {
        $this->load->view('user/form_pesan');
    }
}
