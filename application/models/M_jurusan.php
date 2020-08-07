<?php

class M_jurusan extends CI_Model
{
    private $_table = "jurusan";

    public $id;
    public $jurusan;
    public $nmkakom;

    public function rules()
    {
        return [
            [
                'field' => 'jurusan',
                'label' => 'Nama Jurusan',
                'rules' => 'required'
            ],

            [
                'field' => 'nmkakom',
                'label' => 'Nama Kepala Kompetensi',
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

    public function getAllJurusan()
    {
        return $this->db->get("jurusan");
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
        //$this->id = "";
        $this->id = $post["id"];
        $this->jurusan = $post["jurusan"];
        $this->nmkakom = $post["nmkakom"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}
