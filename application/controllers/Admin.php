<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Sekolahku';
        $data['data'] = $this->M_data->getAll();
        $this->load->view('templates/header3', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function siswa()
    {
        $data['title'] = 'Sekolahku';
        $data['siswa'] = $this->M_siswa->getAll();
        $this->load->view('templates/header3', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/siswa', $data);
        $this->load->view('templates/footer');
    }

    public function guru()
    {
        $data['title'] = 'Sekolahku';
        $data['guru'] = $this->M_guru->getAll();
        $this->load->view('templates/header3', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/guru', $data);
        $this->load->view('templates/footer');
    }

    public function jurusan()
    {
        $data['title'] = 'Sekolahku';
        $data['jurusan'] = $this->M_jurusan->getAll();
        $this->load->view('templates/header3', $data);
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/jurusan', $data);
        $this->load->view('templates/footer');
    }
}
