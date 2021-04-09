<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/pengguna/pengguna');   
    }

    public function add()
    {
        $this->load->view('admin/pengguna/add');
    }

    public function edit()
    {
        $this->load->view('admin/pengguna/edit');
    }

    public function detail()
    {
        $this->load->view('admin/pengguna/detail');
    }

}

/* End of file Controllername.php */

?>