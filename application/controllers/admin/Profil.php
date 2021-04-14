<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        belumlogin();
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Perusahaan', 'required');
        // $this->form_validation->set_rules('email', 'Email Perusahaan', 'valid_email');
        // $this->form_validation->set_rules('wa', 'WhatsApp Perusahaan', 'numeric');
        // // $this->form_validation->set_rules('ig', 'Instagram Perusahaan', '');
        // $this->form_validation->set_rules('noTelefon', 'Nomor Telefon Perusahaan', 'numeric');
        $this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
        // // $this->form_validation->set_rules('deskripsi', 'Deskripsi Perusahaan', '');
        // // $this->form_validation->set_rules('tanggal', 'Tanggal Dibentuk', '');
        // // $this->form_validation->set_rules('fb', 'Facebook Perusahaan', '');
        if ($this->form_validation->run() == false) {
            $data['profile'] = $this->db->get_where('profile', ['id' => 1])->row_array();
            $this->load->view('admin/profil/profil', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'wa' => $this->input->post('wa'),
                'ig' => $this->input->post('ig'),
                'fb' => $this->input->post('fb'),
                'tanggal' => $this->input->post('tanggal'),
                'noTelefon' => $this->input->post('noTelefon'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->db->where(['id' => 1]);
            $update = $this->db->update('profile', $data);
            if ($update) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">Data Berhasil Diperbarui!</div>'
                );
                redirect('admin/Profil');
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger" role="alert">Data Gagal Diperbarui!</div>'
                );
                redirect('admin/Profil');
            }
        }
    }
}

/* End of file Controllername.php */
