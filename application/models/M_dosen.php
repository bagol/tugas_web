<?php

class M_dosen extends CI_Model{
    function getAll(){
        return $this->db->get('dosen');
    }

    function insertDosen($data){
        if($this->db->insert('dosen',$data)){
            return true;
        }else{
            return false;
        }
    }
    function updateDosen($data,$where){
        $this->db->where($where);
        if($this->db->update('dosen', $data)){
            return true;
        }else{
            return false;
        }
    }
    function deletDosen($where){
        $this->db->where($where);
        if($this->db->delete('dosen')){
            return true;
        }else{
            return false;
        }
    }
}