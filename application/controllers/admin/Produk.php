<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/produk/produk');   
    }

    public function add()
    {
        $this->load->view('admin/produk/add');
    }

    public function edit()
    {
        $this->load->view('admin/produk/edit');
    }

    public function detail()
    {
        $this->load->view('admin/produk/detail');
    }

}

/* End of file Controllername.php */

?>