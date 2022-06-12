<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index() {
    $this->load->view('login_view');
    }

    function login_action() {
        $username = $this->input->post('username'); 
        $password = $this->input->post('password'); 
        $where = array(
        'username' => $username,
        'password' => $password
        );
        $cek = $this->login_model->cek_login("admin", $where)->num_rows();
        $cek1 = $this->login_model->cek_login("guest", $where)->num_rows();
        if($cek > 0) {
        $data_session = array(
        'nama' => $username,
        'status' => "login"
        );
        $this->session->set_userdata($data_session);
        redirect(base_url("admincontrol"));
        }
        else if($cek1 > 0) {
            $data_session = array(
            'nama' => $username,
            'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("guestcontrol"));
            }
        else{
            echo "Username dan password salah!";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }

}