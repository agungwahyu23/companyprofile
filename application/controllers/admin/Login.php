<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		if (!$this->session->userdata('idPengguna')) {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == false) {

				$this->load->view('admin/login');
			} else {
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();
				if ($pengguna) {
					if (md5($password) === $pengguna['password']) {
						$data = [
							'idPengguna' => $pengguna['idPengguna'],
							'nama' => $pengguna['nama'],
							'email' => $email,
							'status' => $pengguna['status']
						];
						$this->session->set_userdata($data);
						redirect('admin/Dashboard');
					} else {
						$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
						Password Salah
						</div>');
						redirect('admin/Login');
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Email Tidak Terdaftar
					</div>');
					redirect('admin/Login');
				}
			}
		} else {
			redirect('admin/Dashboard');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('idPengguna');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">Berhasil Keluar!</div>'
		);
		redirect('admin/Login');
	}
}
