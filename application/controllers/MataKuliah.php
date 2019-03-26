<?php

class MataKuliah extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title'] = 'Input Mata Kuliah';
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/forminputmatakuliah');
        $this->load->view('template/footer');
    }

    function tampilMatakuliah(){
        $data['matkul'] = array(
            'kode' => $this->input->post('kode_matkul'),
            'nama' => $this->input->post('nama_matkul'),
            'sks' => $this->input->post('jumlah_sks'),
            'semester' => $this->input->post('semester'),
            'fakultas' => $this->input->post('fakultas')
        );
        $data['title'] = 'Tampil Matakuliah';
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/tampilMatakuliah',$data);
        $this->load->view('template/footer');
    }

}