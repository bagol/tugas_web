<?php

class Dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_dosen');
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
    function tampilDataDosen(){
        $data['title']= 'Data Dosen';
        $data['dosen']= $this->M_dosen->getAll();
        $this->load->view('template/header',$data);
        $this->load->view('dosen/tampilandosen',$data);
        $this->load->view('template/footer');
    }
    function insertDosen(){
        $data = array(
            'nidn' => $this->input->post('nidn'),
            'nama' => $this->input->post('nama'),
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'alamat' => $this->input->post('alamat'),
            'no_tlpn' => $this->input->post('no_tlpn')
        );
        if($this->M_dosen->insertDosen($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Mengedit Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Mengedit Data!!!');
        }
        redirect('dosen/tampilDataDosen');
    }

    function hapusDosen(){
        $data = array(
            'nidn' => $this->uri->segment(3)
        );
        if($this->M_dosen->deletdosen($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Menghapus Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menghapus Data!!!');
        }
        redirect('dosen/tampilDataDosen');
    }

    function editdosen(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'kode_matakuliah' => $this->input->post('kode_matakuliah'),
            'alamat' => $this->input->post('alamat'),
            'no_tlpn' => $this->input->post('no_tlpn')
        );
        $where = array('nidn' => $this->input->post('nidn'));
        if($this->M_dosen->updateDosen($data,$where)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Mengedit Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Mengedit Data!!!');
        }
        redirect('dosen/tampilDataDosen');
    }
}