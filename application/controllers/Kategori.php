<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_kategori');
    }
    public function index()
    {
        $data = array(
            'list_kategori' => $this->model_kategori->show(),

        );
        //header
        $this->load->view('template/header', $data);
        //content
        $this->load->view('kategori/tampil');
        //footer
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');

        $this->load->view('kategori/tambah');

        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $nama_kategori = $this->input->post('nama_kategori');

        //array data
        $datainsert = array(
            'nama_kategori' => $nama_kategori,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_kategori->add($datainsert);

        redirect('kategori');
    }
    public function ubah($id)
    {
        $data = array(
            'kategori' => $this->model_kategori->getByid($id),
        );
        //header
        $this->load->view('template/header', $data);
        //content   
        $this->load->view('kategori/ubah');
        //footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_kategori = $this->input->post('nama_kategori');

        //array data
        $dataupdate = array(
            'nama_kategori' => $nama_kategori,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_kategori->update($id, $dataupdate);

        redirect('kategori');
    }
    public function hapus($id)
    {
        $this->model_kategori->delete($id);

        redirect('kategori');
    }
}
