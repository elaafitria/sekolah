<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function guru()
    {
        $data["guru"] = $this->M_guru->getAll();
        $this->load->view("admin/guru", $data);
    }

    public function tambah_aksi($nip)
    {
        $nip = $this->input->post('nip');
        $nmguru = $this->input->post('nmguru');
        $mapel = $this->input->post('mapel');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nip'           => $nip,
            'nmguru'      => $nmguru,
            'mapel'       => $mapel,
            'ttl'       => $ttl,
            'alamat'          => $alamat,
        );

        $this->M_guru->input_data($data, 'guru');
        $this->session->set_flashdata('flash', 'ditambahkan!');
        redirect('admin/guru');
    }

    public function hapus($nip)
    {
        $where = array('nip' => $nip);
        $this->M_guru->hapus_data($where, 'guru');
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('admin/guru');
    }

    public function edit_g($nip)
    {
        if (!isset($nip)) redirect('admin/guru');

        $guru = $this->M_guru;
        $validation = $this->form_validation;
        $validation->set_rules($guru->rules());

        if ($validation->run()) {
            $guru->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('admin/guru');
        }

        $data["guru"] = $guru->getById($nip);
        if (!$data["guru"]) show_404();

        $data['title'] = 'Edit Data';
        $this->load->view("templates/header3", $data);
        $this->load->view("templates/navbar");
        $this->load->view("templates/sidebar");
        $this->load->view("admin/edit_g");
        $this->load->view("templates/footer");
    }
}
