<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
    }

    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('admin/produk/produk', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required|is_unique[produk.nama]');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas Produk', 'required');
        $this->form_validation->set_rules('status', 'Status Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi Produk', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/produk/add');
        } else {

            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $config['max_size'] = '7748';

            $config['upload_path'] = './img/Produk';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $namaFoto = $this->upload->data('file_name');

                $data = [
                    'idProduk' => $this->Models->randomkode(32),
                    'nama' => $this->input->post('nama'),
                    'kapasitas' => $this->input->post('kapasitas'),
                    'harga' => $this->input->post('harga'),
                    'status' => $this->input->post('status'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'spesifikasi' => $this->input->post('spesifikasi'),
                    'foto' => $namaFoto,
                ];

                if ($this->db->insert('produk', $data)) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Produk Berhasil Ditambahkan</div>');

                    redirect('admin/Produk');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Produk Gagal Ditambahkan</div>');

                    redirect('admin/Produk');
                }
            } else {

                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'

                    . $this->upload->display_errors() .

                    '</div>');

                redirect('admin/Produk/add');
            }
        }
    }

    public function edit($id = null)
    {
        if ($id) {
            $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
            $this->form_validation->set_rules('kapasitas', 'Kapasitas Produk', 'required');
            $this->form_validation->set_rules('status', 'Status Produk', 'required');
            $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
            $this->form_validation->set_rules('spesifikasi', 'Spesifikasi Produk', 'required');

            if ($this->form_validation->run() == false) {
                $data['produk'] = $this->db->get_where('produk', ['idProduk' => $id])->row_array();
                $this->load->view('admin/produk/edit', $data);
            } else {
                $data = [
                    'idProduk' => $this->Models->randomkode(32),
                    'nama' => $this->input->post('nama'),
                    'kapasitas' => $this->input->post('kapasitas'),
                    'harga' => $this->input->post('harga'),
                    'status' => $this->input->post('status'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'spesifikasi' => $this->input->post('spesifikasi'),
                ];
                $this->db->where(['idProduk' => $id]);
                $update = $this->db->update('produk', $data);
                if ($update) {

                    $ubahfoto = $_FILES['foto']['name'];



                    if ($ubahfoto) {

                        $config['allowed_types'] = 'jpg|jpeg|png|gif';

                        $config['max_size'] = '2048';

                        $config['upload_path'] = './img/Produk/';



                        $this->load->library('upload', $config);



                        if ($this->upload->do_upload('foto')) {

                            $data = $this->db->get_where('produk', ['idProduk' => $id])->row_array();

                            $fotolama = $data['gambar'];

                            if ($fotolama) {

                                unlink(FCPATH . './img/Produk/' . $fotolama);
                            }

                            $fotobaru = $this->upload->data('file_name');

                            $this->db->set('foto', $fotobaru);

                            $this->db->where('idProduk', $id);

                            $this->db->update('produk');

                            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    
                            Berhasil Mengubah Data!
    
                            </div>');

                            redirect('admin/Produk');
                        } else {

                            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'

                                . $this->upload->display_errors() .

                                '</div>');

                            // redirect('user/editprofile');

                            redirect('admin/Produk');
                        }
                    } else {



                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    
                        Berhasil Mengubah Data!
    
                        </div>');

                        redirect('admin/Produk');
                    }
                } else {

                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
    
                    Gagal Mengubah Data!
    
                    </div>');

                    redirect('admin/Produk');
                }
            }
        } else {
            redirect('admin/Produk');
        }
    }

    public function detail()
    {
        $this->load->view('admin/produk/detail');
    }
    public function hapus($id = null)
    {
        if ($id) {
            $this->db->delete('produk', ['idProduk' => $id]);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Produk Berhasil Dihapus</div>');

            redirect('admin/Produk');
        } else {
            redirect('admin/Produk');
        }
    }
}

/* End of file Controllername.php */
