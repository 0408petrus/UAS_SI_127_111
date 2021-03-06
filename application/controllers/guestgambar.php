<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class GuestGambar extends CI_Controller {
        
    public function __construct() {
    parent::__construct();
    $this->load->model('GambarModel');
    }

    public function index() {
    $data['gambar'] = $this->GambarModel->view();
    $this->load->view('guestgambar_view', $data);
    }
    
    public function tambah() {
    $data = array();

    if($this->input->post('submit')) {
    $upload = $this->GambarModel->upload();

    if($upload['result'] == "success") {
    $this->GambarModel->save($upload);
    redirect('gambar');

    } else {
    $data['message'] = $upload['error'];
    }
}
    $this->load->view('form', $data);
}
    }
    ?>