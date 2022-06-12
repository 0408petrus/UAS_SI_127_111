<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class DataMahasiswa3 extends CI_Controller {

    public function index(){
        $this->load->model('data_model');
        $data = $this->data_model->GetMahasiswa('tbl_mahasiswa');
        $data = array('data' => $data);
        $this->load->view('data_view', $data);
    }

    public function add_data(){
        $this->load->view('form_add');
    }

    public function insert() {
        $this->load->model('data_model');
        $data = array (
            'id_mhs' => $this->input->post('id_mhs'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'nim_mhs' => $this->input->post('nim_mhs'),
            'kom' => $this->input->post('kom')
        );
        $data = $this->data_model->Insert('tbl_mahasiswa', $data);
        redirect(base_url('datamahasiswa3'),'refresh');
    }

    public function delete_data($id_mhs) {
        $id_mhs = array('id_mhs' => $id_mhs);
        $this->load->model('data_model');
        $this->data_model->Delete('tbl_mahasiswa',$id_mhs);
        redirect(base_url('datamahasiswa3'),'refresh');
    }
        public function edit_data($id_mhs) {
            $this->load->model('data_model');
            $siswa = $this->data_model->GetWhere('tbl_mahasiswa', array('id_mhs' => $id_mhs));
            $data = array(
                'id_mhs' => $siswa[0]['id_mhs'],
                'nama_mhs' => $siswa[0]['nama_mhs'],
                'nim_mhs' => $siswa[0]['nim_mhs'],
                'kom' => $siswa[0]['kom'],
            );
            $this->load->view('form_edit', $data);
        }

        public function update_data() {
            $id_mhs = $_POST['id_mhs'];
            $nama_mhs = $_POST['nama_mhs'];
            $nim_mhs = $_POST['nim_mhs'];
            $kom = $_POST['kom'];
            $data = array(
                'id_mhs' => $id_mhs,
                'nama_mhs' =>$nama_mhs,
                'nim_mhs' =>$nim_mhs,
                'kom' =>$kom 
            );
            $where = array(
                'id_mhs' => $id_mhs,
            );
            $this->load->model('data_model');
            $res = $this->data_model->Update('tbl_mahasiswa', $data, $where);
            if($res>0){
                redirect(base_url('datamahasiswa3'),'refresh');
            }
        }
    }
?>