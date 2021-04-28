<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerbit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('model_penerbit');
    }
    public function index()
    {
        $data = array(
            'list_penerbit' => $this->model_penerbit->show(),

        );
        //header
        $this->load->view('template/header', $data);
        //content
        $this->load->view('penerbit/tampil');
        //footer
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $this->load->view('template/header');

        $this->load->view('penerbit/tambah');

        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $nama_penerbit = $this->input->post('nama_penerbit');

        //array data
        $datainsert = array(
            'nama_penerbit' => $nama_penerbit,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_penerbit->add($datainsert);

        redirect('penerbit');
    }
    public function ubah($id)
    {
        $data = array(
            'penerbit' => $this->model_penerbit->getByid($id),
        );
        //header
        $this->load->view('template/header', $data);
        //content   
        $this->load->view('penerbit/ubah');
        //footer
        $this->load->view('template/footer');
    }
    public function update($id)
    {
        $nama_penerbit = $this->input->post('nama_penerbit');

        //array data
        $dataupdate = array(
            'nama_penerbit' => $nama_penerbit,
            //'alamat'  => 'Jl sukoharjo-karanganyar no 1',

        );
        $this->model_penerbit->update($id, $dataupdate);

        redirect('penerbit');
    }
    public function hapus($id)
    {
        $this->model_penerbit->delete($id);

        redirect('penerbit');
    }
}
