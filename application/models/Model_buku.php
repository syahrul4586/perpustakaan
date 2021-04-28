<?php

class Model_Buku extends CI_Model
{
    //tampil
    public function show()
    {
        $this->db->join('penulis', 'buku.id_penulis = penulis.id_penulis');
        $this->db->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
        $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');
        return $this->db->order_by('id_buku', 'DESc')->get('buku')->result_array();
    }
    //tampil by id
    public function getByid($id)
    {
        $this->db->where('id_buku', $id);

        return $this->db->get('buku')->row();
    }
    //tambah
    public function add($data)
    {
        $this->db->insert('buku', $data);
    }
    //ubah
    public function update($id, $data)
    {
        $this->db->where('id_buku', $id)
            ->update('buku', $data);
    }

    //data
    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');

        // $this->db->query("DELETE FROM penerbit WHERE id_penerbit = $id");

    }
}
