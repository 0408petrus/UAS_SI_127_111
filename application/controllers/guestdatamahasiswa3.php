<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class GuestDataMahasiswa3 extends CI_Controller {

    public function index(){
        $this->load->model('data_model');
        $data = $this->data_model->GetMahasiswa('tbl_mahasiswa');
        $data = array('data' => $data);
        $this->load->view('data_guest_view', $data);
    }
    }
?>  