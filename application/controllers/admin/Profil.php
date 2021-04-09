<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/profil/profil');   
    }

    public function add()
    {
        $this->load->view('admin/profil/add');
    }

    public function edit()
    {
        $this->load->view('admin/profil/edit');
    }

    public function detail()
    {
        $this->load->view('admin/profil/detail');
    }

}

/* End of file Controllername.php */

?>