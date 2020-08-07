<?php

class M_data extends CI_Model
{
    private $_table = "data";

    public $id;
    public $nama;
    public $jabatan;
    public $ttl;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],

            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
            ],

            [
                'field' => 'ttl',
                'label' => 'TTL',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->jabatan = $post["jabatan"];
        $this->ttl = $post["ttl"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}
