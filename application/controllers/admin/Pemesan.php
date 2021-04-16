<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesan extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		belumlogin();
	}

    public function index()
    {
        $data['pemesan'] = $this->db->get('transaksi')->result_array();
        $this->load->view('admin/pemesan/pemesan', $data);
    }

    public function hapus($id = null)
    {
        if ($id) {
            $this->db->delete('transaksi', ['idTransaksi' => $id]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
						Berhasil Menghapus Pesanan Pengunjung
						</div>');
            redirect('admin/Pemesan');
        } else {
            redirect('admin/Pemesan');
        }
    }
}
