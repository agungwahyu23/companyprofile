<?php
defined('BASEPATH') or exit('No direct script access allowed');


class TentangKami extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->model('Models');
    }

    public function index()
    {
        $data['profil'] = $this->db->get('profile')->row_array();
        $this->load->view('user/tentang_kami', $data);   
    }
}
    
?>