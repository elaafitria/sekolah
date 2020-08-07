<?php

defined('BASEPATH') or exit('No direct script acces allowed');
class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["data"] = $this->M_data->getAll();
        $this->load->view("admin/index", $data);
    }

    public function tambah_aksi($id)
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');


        $data = array(
            'id'       => $id,
            'nama'      => $nama,
            'jabatan'     => $jabatan,
            'ttl'       => $ttl,
            'alamat'    => $alamat
        );

        $this->M_data->input_data($data, 'data');
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('admin/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_data->hapus_data($where, 'data');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/index');
    }

    public function edit_d($id)
    {
        if (!isset($id)) redirect('admin/index');

        $data = $this->M_data;
        $validation = $this->form_validation;
        $validation->set_rules($data->rules());

        if ($validation->run()) {
            $data->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/index');
        }

        $data['data'] = $data->getById($id);
        if (!$data['data']) show_404();

        $data['title'] = 'Edit Data';
        $this->load->view("templates/header3", $data);
        $this->load->view("templates/navbar");
        $this->load->view("templates/sidebar");
        $this->load->view("admin/edit_d", $data);
        $this->load->view("templates/footer");
    }
}
