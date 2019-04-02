<?php

class Mahasiswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_mahasiswa');
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

    function insertMahasiswa(){
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        );
        if($this->M_mahasiswa->insertMhs($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Menambahkan Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menambahkan Data!!!');
        }
        redirect('/mahasiswa/tampilData/');
    }

    function tampilData(){
        $data['mhs'] = $this->M_mahasiswa->getAll();
        $data['title'] = 'Data Mahasiswa';
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/tampil',$data);
        $this->load->view('template/footer');
    }
    function hapusMhs(){
        $data = array(
            'nim' => $this->uri->segment(3)
        );
        if($this->M_mahasiswa->deletMhs($data)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Menghapus Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Menghapus Data!!!');
        }
        redirect('/mahasiswa/tampilData/');
    }

    function editMhs(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        );
        $where = array('nim' => $this->input->post('nim'));
        if($this->M_mahasiswa->updateMhs($data,$where)){
            $this->session->set_flashdata('pesan_berhasil', 'Berhasil Mengedit Data!!!');
        }else{
            $this->session->set_flashdata('pesan_gagal', 'Gagal Mengedit Data!!!');
        }
        redirect('/mahasiswa/tampilData/');
    }

}