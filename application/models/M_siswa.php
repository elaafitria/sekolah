<?php

class M_siswa extends CI_Model
{
    private $_table = "siswa";

    public $nis;
    public $nama;
    public $kelas;
    public $jurusan;
    public $ttl;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'Nama Siswa',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => 'Kelas',
                'rules' => 'required'
            ],

            [
                'field' => 'jurusan',
                'label' => 'Jurusan',
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

    public function getById($nis)
    {
        return $this->db->get_where($this->_table, ["nis" => $nis])->row();
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
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->kelas = $post["kelas"];
        $this->jurusan = $post["jurusan"];
        $this->ttl = $post["ttl"];
        $this->alamat = $post["alamat"];
        return $this->db->update($this->_table, $this, array('nis' => $post['nis']));
    }
}
