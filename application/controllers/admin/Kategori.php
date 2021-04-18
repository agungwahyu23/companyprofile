<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        belumlogin();
    }

    public function index()
    {
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $this->load->view('admin/kategori/kategori', $data);
    }

    public function add()
    {
        $this->load->view('admin/kategori/add');
    }
    
    public function edit()
    {
        $this->load->view('admin/kategori/edit');
    }
}
?>