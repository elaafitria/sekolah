<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function jurusan()
    {
        $data["jurusan"] = $this->M_jurusan->getAll();
        $this->load->view("admin/jurusan", $data);
    }

    public function tambah_aksi($id = null)
    {
        $id = $this->input->post('id');
        $jurusan = $this->input->post('jurusan');
        $nmkakom = $this->input->post('nmkakom');

        $data = array(
            'id'           => $id,
            'jurusan'      => $jurusan,
            'nmkakom'       => $nmkakom,
        );

        $this->M_jurusan->input_data($data, 'jurusan');
        redirect('admin/jurusan');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->M_jurusan->hapus_data($where, 'jurusan');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/jurusan');
    }

    public function edit_j($id)
    {
        if (!isset($id)) redirect('admin/jurusan');

        $jurusan = $this->M_jurusan;
        $validation = $this->form_validation;
        $validation->set_rules($jurusan->rules());

        if ($validation->run()) {
            $jurusan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/jurusan');
        }

        $data["jurusan"] = $jurusan->getById($id);
        if (!$data["jurusan"]) show_404();

        $data['title'] = 'Edit Data';
        $this->load->view("templates/header3", $data);
        $this->load->view("templates/navbar");
        $this->load->view("templates/sidebar");
        $this->load->view("admin/edit_j");
        $this->load->view("templates/footer");
    }
}
