<?php

class Model_Penulis extends CI_Model
{
    //tampil
    public function show()
    {
        return $this->db->order_by('id_penulis', 'DESc')->get('penulis')->result_array();
    }
    //tampil by id
    public function getByid($id)
    {
        $this->db->where('id_penulis', $id);

        return $this->db->get('penulis')->row();
    }
    //tambah
    public function add($data)
    {
        $this->db->insert('penulis', $data);
    }
    //ubah
    public function update($id, $data)
    {
        $this->db->where('id_penulis', $id)
            ->update('penulis', $data);
    }

    //data
    public function delete($id)
    {
        $this->db->where('id_penulis', $id);
        $this->db->delete('penulis');

        // $this->db->query("DELETE FROM penulis WHERE id_penulis = $id");

    }
}
