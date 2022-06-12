<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Register extends CI_Controller{
    public function index(){
        $this->form_validation->set_rules('username', 'Username','required' , 'min_length[6]');
        $this->form_validation->set_rules('password', 'Password','required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE){
        $this->load->model('register_model');//registermodel
        $data = $this->register_model->GetMahasiswa('admin');
        $data = array('data' => $data);
        $this->load->view('register_view', $data);
        }
        else{
            echo 'Validasi Sukses!';
        }
    }


    public function add_data(){
        $this->load->view('form_register');
    }

    public function insert() {
        $this->load->model('register_model');//registermodel
        $data = array (
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $data = $this->register_model->Insert('admin', $data);
        redirect(base_url('login'),'refresh');
    }
}