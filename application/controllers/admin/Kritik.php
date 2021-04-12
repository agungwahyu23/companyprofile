<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritik extends CI_Controller
{ 
    public function index()
	{
        $data['kritik'] = $this->db->get('kritik')->result_array();
        $this->load->view('admin/kritik/kritik', $data);
    }
}