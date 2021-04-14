<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Models');
        belumlogin();
    }

    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('admin/produk/produk', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas Produk', 'required');
        $this->form_validation->set_rules('status', 'Status Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi Produk', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/produk/add');
        } else {

            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $config['max_size'] = '5000';

            $config['upload_path'] = './img/Produk';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $namaFoto = $this->upload->data('file_name');

                $config['image_library']    = 'gd2';
                $config['source_image']     = './img/Produk/' . $namaFoto;
                //lokasi folder gbr
                $config['new_image']    = './img/Produk/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '100%';
                $config['width']            = 1000;
                $config['height']           = 1000;
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

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

                        $config['max_size'] = '5000';

                        $config['upload_path'] = './img/Produk/';



                        $this->load->library('upload', $config);



                        if ($this->upload->do_upload('foto')) {

                            $data = $this->db->get_where('produk', ['idProduk' => $id])->row_array();

                            $fotolama = $data['gambar'];

                            if ($fotolama) {

                                unlink(FCPATH . './img/Produk/' . $fotolama);
                            }

                            $fotobaru = $this->upload->data('file_name');
                           

                            $config['image_library']    = 'gd2';
                            $config['source_image']     = './img/Produk/' . $fotobaru;
                            //lokasi folder gbr
                            $config['new_image']    = './img/Produk/';
                            $config['create_thumb']     = TRUE;
                            $config['maintain_ratio']   = TRUE;
                            $config['quality']          = '50%';
                            $config['width']            = 1000;
                            $config['height']           = 1000;
                            $config['thumb_marker']     = '';

                            $this->load->library('image_lib', $config);
                            $this->image_lib->resize();

                            // $this->db->set('foto', $fotobaru);

                            $this->db->where('idProduk', $id);

                            $updatelagi = $this->db->update('produk', ['foto' => $fotobaru]);

                            //  var_dump($fotobaru);die;
                            if($updatelagi){
                                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        
                                Berhasil Mengubah Data!
        
                                </div>');
    
                                redirect('admin/Produk');
                            }else{
                                var_dump('gugu');die;
                            }
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


    public function tambahfoto($id = null)
    {
        if ($id) {
            $data['produk'] = $this->db->get('produk', ['idProduk' => $id])->row_array();
            $data['galeri'] = $this->db->get_where('galeri', ['idProduk' => $id])->result_array();
            $this->load->view('admin/produk/tambahFoto', $data);
        } else {
            redirect('admin/Produk');
        }
    }

    public function hapusGaleri($id = null)
    {
        if ($id) {

            $galeri = $this->db->get_where('galeri', ['idGaleri' => $id])->row_array();

            $this->db->delete('galeri', ['idGaleri' => $id]);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                            Berhasil Menghapus Foto!
                            </div>');
            redirect('admin/Produk/tambahfoto/' . $galeri['idProduk']);
        } else {
            redirect('admin/Produk');
        }
    }

    public function uploadGaleri()
    {
        $id = $this->input->post('id');
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

                $config['image_library']    = 'gd2';
                $config['source_image']     = './img/Produk/' . $fotobaru;
                //lokasi folder gbr
                $config['new_image']    = './img/Produk/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '100%';
                // $config['width']            = 383;
                // $config['height']           = 259;
                $config['width']            = 500;
                $config['height']           = 450;
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data = [
                    'idGaleri' => $this->Models->randomkode(32),
                    'idProduk' => $id,
                    'foto' => $fotobaru
                ];
                $this->db->insert('galeri', $data);

                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    
                            Berhasil Menambahkan Foto!
    
                            </div>');

                redirect('admin/Produk/tambahfoto/' . $id);
            } else {

                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">'

                    . $this->upload->display_errors() .

                    '</div>');

                // redirect('user/editprofile');

                redirect('admin/Produk');
            }
        }
    }
}

/* End of file Controllername.php */
