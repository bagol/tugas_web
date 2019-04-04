<?php

class MataKuliah extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_matkul');
    }

    function index(){
        $data['title'] = 'Input Mata Kuliah';
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/forminputmatakuliah');
        $this->load->view('template/footer');
    }

    function tampilMatakuliah(){
        $data['matkul'] = array(
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('jumlah_sks'),
            'semester' => $this->input->post('semester'),
            'fakultas' => $this->input->post('fakultas')
        );
        $data['title'] = 'Tampil Matakuliah';
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/tampilMatakuliah',$data);
        $this->load->view('template/footer');
    }
    
    function tampilMatkul(){
        $data['title'] = 'Tampil Data Matakuliah';
        $data['matkul']= $this->M_matkul->getAll();
        $this->load->view('template/header',$data);
        $this->load->view('matakuliah/dataMatakuliah',$data);
        $this->load->view('template/footer');
    }
    function insertmatkul(){
        $data = array(
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('jumlah_sks'),
            'semester' => $this->input->post('semester'),
            'fakultas' => $this->input->post('fakultas')
        );
        if($this->M_matkul->insertmatakuliah($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Mengedit Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Mengedit Data!!!');
        }
        redirect('mataKuliah/tampilMatkul');
    }

    function hapusmatkul(){
        $data = array(
            'kode_matakuliah' => $this->uri->segment(3)
        );
        if($this->M_matkul->deletmatakuliah($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Menghapus Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menghapus Data!!!');
        }
        redirect('mataKuliah/tampilMatkul');
    }

    function editmatkul(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('jumlah_sks'),
            'semester' => $this->input->post('semester'),
            'fakultas' => $this->input->post('fakultas')
        );
        $where = array('kode_matakuliah' => $this->input->post('kode_matakuliah'));
        if($this->M_matkul->updatematakuliah($data,$where)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Mengedit Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Mengedit Data!!!');
        }
        redirect('mataKuliah/tampilMatkul');
    }

}