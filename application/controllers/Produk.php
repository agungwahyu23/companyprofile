<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('user/produk', $data);   
    }

    public function detail($id = null)
    {
        $data['profile'] = $this->db->get_where('profile', ['id' => 1])->row_array();
        if($id){
            $data['produk'] = $this->db->get_where('produk', ['idProduk' => $id])->row_array();
            $this->load->view('user/detail_produk', $data);
        }else{
            redirect(base_url('Produk'));
        }
    }

}

/* End of file Controllername.php */

?>