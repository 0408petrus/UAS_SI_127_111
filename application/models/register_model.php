<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Register_model extends CI_Model{
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }


    public function GetMahasiswa($table)
    {
        $res=$this->db->get($table);
        return $res->result_array();
    }

    public function GetWhere($table,$data){
        $res = $this->db->get_where($table, $data);
        return $res->result_array();
    }
    
    public function Insert($table,$data) {
        $res = $this->db->insert($table, $data);
        return $res;
    }

}
?>