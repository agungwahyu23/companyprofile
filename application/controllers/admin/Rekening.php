<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/rekening/rekening');   
    }

    public function add()
    {
        $this->load->view('admin/rekening/add');
    }

    public function edit()
    {
        $this->load->view('admin/rekening/edit');
    }

    public function detail()
    {
        $this->load->view('admin/rekening/detail');
    }

}

/* End of file Controllername.php */

?>