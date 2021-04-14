<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        belumlogin();
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get('pengguna')->result_array();
        $this->load->view('admin/pengguna/pengguna', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pengguna.email]');
        $this->form_validation->set_rules('status', 'Bagian', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('konfirmasiPassword', 'Konfirmasi Password', 'required|min_length[5]|matches[password]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/pengguna/add');
        } else {
            $data = [
                'idPengguna' => $this->Models->randomkode(32),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'status' => $this->input->post('status'),
                'password' => md5($this->input->post('password')),
                'createDate' => date("Y-m-d H:i:s"),
            ];

            if ($this->db->insert('pengguna', $data)) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Akun Berhasil Di Tambahkan
                </div>');
                redirect('admin/Pengguna');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Akun Gagal Di Tambahkan
                </div>');
                redirect('admin/Pengguna');
            }
        }
    }

    public function hapus($id = null)
    {
        if($id){
            $this->db->delete('pengguna', ['idPengguna' => $id]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                Pengguna berhasil dihapus
                </div>');
                redirect('admin/Pengguna');
        }else{
            redirect('admin/Pengguna');
        }
    }

}

/* End of file Controllername.php */
