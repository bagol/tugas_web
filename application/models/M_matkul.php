<?php

class M_matkul extends CI_Model{
    function getAll(){
        return $this->db->get('matakuliah');
    }

    function insertmatakuliah($data){
        if($this->db->insert('matakuliah',$data)){
            return true;
        }else{
            return false;
        }
    }
    function updatematakuliah($data,$where){
        $this->db->where($where);
        if($this->db->update('matakuliah', $data)){
            return true;
        }else{
            return false;
        }
    }
    function deletmatakuliah($where){
        $this->db->where($where);
        if($this->db->delete('matakuliah')){
            return true;
        }else{
            return false;
        }
    }
}