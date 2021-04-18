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
        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('admin/kategori/add');
        }else{
            $data = [
                'nama_kategori' => $this->input->post('nama')
            ];


            if($this->db->insert('kategori', $data)){
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Kategori Berhasil Di Tambahkan
                </div>');
                redirect('admin/Kategori');
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Kategori Gagal Di Tambahkan
                </div>');
                redirect('admin/Kategori');
            }
        }
    }
    
    public function edit($id = null)
    {
        if($id){
            $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
            if($this->form_validation->run() == false){
                $data['kategori'] = $this->db->get_where('kategori', ['idKategori' => $id])->row_array();
                $this->load->view('admin/kategori/edit', $data);
            }else{
                $data = [
                    'nama_kategori' => $this->input->post('nama')
                ];
    
                $this->db->where(['idKategori' => $id]);
                $update = $this->db->update('kategori', $data);
                if($update){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                    Kategori Berhasil Diubah
                    </div>');
                    redirect('admin/Kategori');
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Kategori Gagal Diubah
                    </div>');
                    redirect('admin/Kategori');
                }
            }
        }else{
            redirect('admin/Kategori');
        }
    }
}
