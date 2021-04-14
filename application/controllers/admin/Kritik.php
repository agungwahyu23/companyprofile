<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritik extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		belumlogin();
	}
    public function index()
    {
        $data['kritik'] = $this->db->get('kritik')->result_array();
        $this->load->view('admin/kritik/kritik', $data);
    }

    public function hapus($id = null)
    {
        if ($id) {
            $this->db->delete('kritik', ['idKritik' => $id]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
						Berhasil Menghapus Kritik Pengunjung
						</div>');
            redirect('admin/Kritik');
        } else {
            redirect('admin/Kritik');
        }
    }
}
