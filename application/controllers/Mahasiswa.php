<?php

class Mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $data['title'] = 'Input Mahasiswa';
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/formInput');
        $this->load->view('template/footer');
    }

    function tampilMahasiswa(){
        $data['title']= 'Tampil mahasiswa';
        $data['mahasiswa'] = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        );
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/tampilMahasiswa',$data);
        $this->load->view('template/footer');
    }

}