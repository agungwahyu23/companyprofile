<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $data['profil'] = $this->db->get('profile')->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();

        if ($this->input->post('cari')) {
            $cari = $this->input->post('cari');
            $this->db->like('nama', $cari);
            $total = $this->db->get('produk')->num_rows();
        } else {
            //ambil data total
            $total = $this->db->count_all('produk');
            $cari = null;
        }
        
        $this->load->library('pagination'); // Load librari paginationnya


        //konfigurasi pagination
        $config['base_url']                = base_url() . 'produk/index/';
        $config['total_rows']            =  $total;
        $config['use_page_numbers']        = TRUE;
        $config['per_page']                = 12;
        $config['uri_segment']            = 3;
        $config['num_links']            = 5;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $config['first_url']            = base_url() . 'produk/index';

        $this->pagination->initialize($config); // Set konfigurasi paginationnya
        $page         = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) * $config['per_page'] : 0;

        if ($cari) {
            $this->db->like('nama', $cari);
            $data['produk'] = $this->db->get('produk', $config['per_page'], $page)->result_array();
        } else {
            $data['produk'] = $this->db->get('produk', $config['per_page'], $page)->result_array();
        }

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('user/produk', $data);   
    }

    public function detail($id = null)
    {
        $data['profil'] = $this->db->get_where('profile', ['id' => 1])->row_array();
        if($id){
            $data['galeri'] = $this->db->get_where('galeri', ['idProduk' => $id])->result_array();
            $data['produk'] = $this->db->get_where('produk', ['idProduk' => $id])->row_array();
            $this->load->view('user/detail_produk', $data);
        }else{
            redirect(base_url('Produk'));
        }
    }

}

/* End of file Controllername.php */
