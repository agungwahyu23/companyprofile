<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $this->load->view('user/produk');   
    }

    public function detail()
    {
        $this->load->view('user/detail_produk');
    }

}

/* End of file Controllername.php */

?>