<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in3();
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['pegawai'] = $this->Pegawai_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_pegawai", $data);
        $this->load->view("layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Pegawai";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'required', [
            'required' => 'Jam Kerja Wajib di isi'
        ]);
        $this->form_validation->set_rules('hari_kerja', 'Hari Kerja', 'required', [
            'required' => 'Hari Kerja Wajib di isi'
        ]);
        $this->form_validation->set_rules('gaji',  'Gaji', 'required', [
            'required' => 'Gaji Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_tambah_pegawai", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'jam_kerja' => $this->input->post('jam_kerja'),
                'hari_kerja' => $this->input->post('hari_kerja'),
                'gaji' => $this->input->post('gaji'),
            ];
            $this->Pegawai_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data Pegawai Berhasil Ditambah!</div>');
            redirect('Pegawai');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $this->load->view('layout/header', $data);
        $this->load->view("pegawai/vw_detail_pegawai", $data);
        $this->load->view('layout/footer', $data);
    }

    public function hapus($id)
    {
        $this->Pegawai_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Pegawai tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Pegawai Berhasil Dihapus!</div>');
        }
        redirect('Pegawai');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Pegawai";
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('jam_kerja', 'Jam Kerja', 'required', [
            'required' => 'Jam Kerja Wajib di isi'
        ]);
        $this->form_validation->set_rules('hari_kerja', 'Hari Kerja', 'required', [
            'required' => 'Hari Kerja Wajib di isi'
        ]);
        $this->form_validation->set_rules('gaji',  'Gaji', 'required', [
            'required' => 'Gaji Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_ubah_pegawai", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'jam_kerja' => $this->input->post('jam_kerja'),
                'hari_kerja' => $this->input->post('hari_kerja'),
                'gaji' => $this->input->post('gaji'),
                'id' => $this->input->post('id'),
            ];
            $this->Pegawai_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data Pegawai Berhasil Diubah!</div>');
            redirect('Pegawai');
        }
    }
}
