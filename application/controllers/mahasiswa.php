<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function index(){
        $data['nama'] = 'Wawan';
        $data['nim'] = '201401127';
        $data['kom'] = 'C';
        $this->load->view('mahasiswa_view',$data);
    }
}