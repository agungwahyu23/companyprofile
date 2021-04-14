<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Beranda extends CI_Controller
{
    public function __construct()
    {
    parent::__construct();
    $this->load->model('Models');
    }

    public function index()
    {
        $data['profil'] = $this->db->get('profile')->row_array();
        $this->db->order_by('rand()');
        $data['produk'] = $this->db->get_where('produk', ['status' => 1], 4)->result_array();
        $this->load->view('user/beranda', $data);   
    }

    public function kritik(){
        $data = [
            'idKritik' => $this->Models->randomkode(32),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'isi' => $this->input->post('pesan'),
        ];

        if($this->db->insert('kritik', $data)){
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kritik berhasil terkirim, Terima kasih telah memberi masukan kepada kami.</div>');
            redirect(base_url());
        }else{
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gagal mengirim kritik dan saran</div>');
            redirect(base_url());
        }
    }
}
    
?>