<?php

class M_guru extends CI_Model
{
    private $_table = "guru";

    public $nip;
    public $nmguru;
    public $mapel;
    public $ttl;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nmguru',
                'label' => 'Nama Guru',
                'rules' => 'required'
            ],

            [
                'field' => 'mapel',
                'label' => 'Mata Pelajaran',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ]
        ];
    }

    public function getById($nip)
    {
        return $this->db->get_where($this->_table, ["nip" => $nip])->row();
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
        $this->nip = $post["nip"];
        $this->nmguru = $post["nmguru"];
        $this->mapel = $post["mapel"];
        $this->ttl = $post["ttl"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('nip' => $post['nip']));
    }
}
