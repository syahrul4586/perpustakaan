<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penulis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_penulis');
    }
    public function index()
    {
        $data = array(
            'list_penulis' => $this->model_penulis->show(),

        );
        //header
        $this->load->view('template/header', $data);
        //content
        $this->load->view('penulis/tampil');
        //footer
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');

        $this->load->view('penulis/tambah');

        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $nama_penulis = $this->input->post('nama_penulis');

        //array data
        $datainsert = array(
            'nama_penulis' => $nama_penulis,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_penulis->add($datainsert);

        redirect('penulis');
    }
    public function ubah($id)
    {
        $data = array(
            'penulis' => $this->model_penulis->getByid($id),
        );
        //header
        $this->load->view('template/header', $data);
        //content   
        $this->load->view('penulis/ubah');
        //footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_penulis = $this->input->post('nama_penulis');

        //array data
        $dataupdate = array(
            'nama_penulis' => $nama_penulis,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_penulis->update($id, $dataupdate);

        redirect('penulis');
    }
    public function hapus($id)
    {
        $this->model_penulis->delete($id);

        redirect('penulis');
    }
}
