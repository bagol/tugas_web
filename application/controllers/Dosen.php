<?php

class Dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title'] = 'Input Dosen';
        $this->load->view('template/header',$data);
        $this->load->view('dosen/forminputdosen');
        $this->load->view('template/footer');
    }
    function tampilDosen(){
        $data['title']= 'Tampil dosen';
        $data['dosen'] = array(
            'nid' => $this->input->post('nid'),
            'nama' => $this->input->post('nama'),
            'kode_matkul' => $this->input->post('kode_matkul'),
            'no_tlpn' => $this->input->post('no_tlpn'),
            'alamat' => $this->input->post('alamat')
        );
        $this->load->view('template/header',$data);
        $this->load->view('dosen/tampilDosen',$data);
        $this->load->view('template/footer');
    }
}