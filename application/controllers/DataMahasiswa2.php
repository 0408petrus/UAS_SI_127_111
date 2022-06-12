<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class DataMahasiswa2 extends CI_Controller{
    public function index(){
        $this->load->model('mhs_model');
        $data = $this->mhs_model->GetMahasiswa();
        foreach ($data as $mahasiswa) {
            echo "Nama : ".$mahasiswa['nama_mhs']."<br/>";
            echo "NIM  : ".$mahasiswa['nim_mhs']."<br/>";
            echo "KOM  : ".$mahasiswa['kom']."<br/>";
        }

    }
}

