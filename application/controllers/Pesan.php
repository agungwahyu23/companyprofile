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
        $data['profil'] = $this->db->get('profile')->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('user/form_pesan', $data);
    }
}
