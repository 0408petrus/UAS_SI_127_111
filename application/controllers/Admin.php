<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller{

    public function __construct(){
        parent:: __construct();
    }
    
    public function index(){
        $this->load->view('admin');

    }

    public function hitungnilai(){
        $this->load->view('hitung_nilai');
    }

    public function kalkulator(){
        $this->load->view('kalkulator');
    }
}
