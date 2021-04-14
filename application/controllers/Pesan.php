<?php

class Pesan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
    }

    public function index($media, $id = null)
    {
        if($id && $media){

            $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('nohp', 'Nomor Telefon', 'required|numeric');
            $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required');

            if($this->form_validation->run() == false){
                $data['profil'] = $this->db->get('profile')->row_array();
                $data['produk'] = $this->db->get_where('produk', ['idProduk' => $id])->row_array();
                $this->load->view('user/form_pesan', $data);
            }else{
                $produk = $this->db->get_where('produk', ['idProduk' => $id])->row_array();
                $namaProduk = $produk['nama'];
                $kapasitas = $produk['kapasitas'] / 1000;

                $profil = $this->db->get('profile')->row_array();
                $wa = $profil['wa'];
                $email = $profil['email'];

                $nama = $this->input->post('nama');
                $emailPembeli = $this->input->post('email');
                $nohp = $this->input->post('nohp');
                $alamat = $this->input->post('alamat');
                $produkPemesanan = $this->input->post('produk');

                $data = [
                    'idTransaksi' => $this->Models->randomkode(32),
                    'nama' => $nama, 
                    'email' => $emailPembeli,
                    'alamat' => $alamat,
                    'nohp' => $nohp, 
                    'produk' => $produkPemesanan
                ];

                if($media == 'wa'){
                    $link = "https://api.whatsapp.com/send?phone=$wa&text=Selamat%20Pagi%21%20Saya%20berminat%20membeli%20$namaProduk%20kapasitas%20$kapasitas%20Kg";
                    $this->db->insert('transaksi', $data);

                    redirect($link);

                }else if($media = 'email'){
                    $link = "mailto:$email?Subject=Mesin%20Roasting&Body=Selamat%20Pagi%21%20Saya%20ingin%20membeli%20 $namaProduk%20kapasitas%20$kapasitas%20Kg";
                    $this->db->insert('transaksi', $data);
                    
                    redirect($link);

                }else{
                    redirect(base_url('Produk'));
                }

            }

        }else{
            redirect('Produk');
        }
    }
}
