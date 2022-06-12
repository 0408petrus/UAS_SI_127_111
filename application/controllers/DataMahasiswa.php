<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class DataMahasiswa extends CI_Controller{
    public function index(){
        $data = $this->db->query("SELECT * from tbl_mahasiswa");
        foreach ($data->result_array() as $mahasiswa) {
            echo "Nama : ".$mahasiswa['nama_mhs']."<br/>";
            echo "NIM  : ".$mahasiswa['nim_mhs']."<br/>";
            echo "KOM  : ".$mahasiswa['kom']."<br/>";
        }

    }
}
