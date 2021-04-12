<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Beranda extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->model('Models');
    }

    public function index()
    {
        $data['profil'] = $this->db->get('profile')->row_array();
        $this->db->order_by('rand()');
        $data['produk'] = $this->db->get_where('produk', ['status' => 1])->result_array();
        $this->load->view('user/beranda', $data);   
    }
}
    
?>