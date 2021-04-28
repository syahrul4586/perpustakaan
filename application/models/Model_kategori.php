<?php

class Model_Kategori extends CI_Model
{
    //tampil
    public function show()
    {
        return $this->db->order_by('id_kategori', 'DESc')->get('kategori')->result_array();
    }
    //tampil by id
    public function getByid($id)
    {
        $this->db->where('id_kategori', $id);

        return $this->db->get('kategori')->row();
    }
    //tambah
    public function add($data)
    {
        $this->db->insert('kategori', $data);
    }
    //ubah
    public function update($id, $data)
    {
        $this->db->where('id_kategori', $id)
            ->update('kategori', $data);
    }

    //data
    public function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');

        // $this->db->query("DELETE FROM penerbit WHERE id_penerbit = $id");

    }
}
