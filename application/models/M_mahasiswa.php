<?php

class M_mahasiswa extends CI_Model{
    function getAll(){
        return $this->db->get('mhs');
    }

    function insertMhs($data){
        if($this->db->insert('mhs',$data)){
            return true;
        }else{
            return false;
        }
    }
    function updateMhs($data,$where){
        $this->db->where($where);
        $this->db->update('mhs', $data);
    }
    function deletMhs($where){
        $this->db->where($where);
        if($this->db->delete('mhs')){
            return true;
        }else{
            return false;
        }
    }
}
