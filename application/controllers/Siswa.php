<?php

defined('BASEPATH') or exit('No direct script acces allowed');
class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function siswa()
    {
        $data["siswa"] = $this->M_siswa->getAll();
        $this->load->view("admin/siswa", $data);
    }

    public function tambah_aksi($nis)
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $jurusan = $this->input->post('jurusan');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');


        $data = array(
            'nis'       => $nis,
            'nama'      => $nama,
            'kelas'     => $kelas,
            'jurusan'   => $jurusan,
            'ttl'       => $ttl,
            'alamat'    => $alamat
        );

        $this->M_siswa->input_data($data, 'siswa');
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('admin/siswa');
    }

    public function hapus($nis)
    {
        $where = array('nis' => $nis);
        $this->M_siswa->hapus_data($where, 'siswa');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/siswa');
    }

    public function edit($nis)
    {
        if (!isset($nis)) redirect('admin/siswa');

        $siswa = $this->M_siswa;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/siswa');
        }

        $data['siswa'] = $siswa->getById($nis);
        $data['jurusan'] = $this->M_jurusan->getAllJurusan();
        if (!$data['siswa']) show_404();

        $data['title'] = 'Edit Data';
        $this->load->view("templates/header3", $data);
        $this->load->view("templates/navbar");
        $this->load->view("templates/sidebar");
        $this->load->view("admin/edit", $data);
        $this->load->view("templates/footer");
    }
}
