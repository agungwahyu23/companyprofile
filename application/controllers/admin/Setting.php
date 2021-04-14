<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        belumlogin();
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $id = $this->session->userdata('idPengguna');
        $data['pengguna'] = $this->db->get_where('pengguna', ['idPengguna' => $id])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/setting/akun', $data);
        } else {
            $password = md5($this->input->post('password'));
            if ($password == $data['pengguna']['password']) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email')
                ];
                $this->db->where(['idPengguna' => $id]);
                $update = $this->db->update('pengguna', $data);
                if ($update) {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">Data Berhasil Diperbarui!</div>'
                    );
                    redirect('admin/Setting/');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger" role="alert">Data Gagal Diperbarui!</div>'
                    );
                    redirect('admin/Setting/');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger" role="alert">Password yang anda masukan salah!</div>'
                );
                redirect('admin/Setting/');
            }
        }
    }

    public function gantiPassword()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passwordBaru', 'Password Baru', 'required');
        $this->form_validation->set_rules('konfirmasiPassword', 'Konfirmasi Password', 'required|matches[passwordBaru]');

        $id = $this->session->userdata('idPengguna');
        $data['pengguna'] = $this->db->get_where('pengguna', ['idPengguna' => $id])->row_array();
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/setting/gantiPassword', $data);
        } else {
            $password = md5($this->input->post('password'));
            if ($password == $data['pengguna']['password']) {
                $data = [
                    'password' => md5($this->input->post('passwordBaru'))
                ];
                $this->db->where(['idPengguna' => $id]);
                $update = $this->db->update('pengguna', $data);
                if ($update) {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">Password Berhasil Diperbarui!</div>'
                    );
                    redirect('admin/Setting/gantiPassword');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger" role="alert">Password Gagal Diperbarui!</div>'
                    );
                    redirect('admin/Setting/gantiPassword');
                }
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger" role="alert">Password yang anda masukan salah!</div>'
                );
                redirect('admin/Setting/gantiPassword');
            }
        }
    }
}

/* End of file Controllername.php */
