<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view("supplier/vw_supplier", $data);
        $this->load->view('layout/footer', $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Supplier";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->get();
        $this->form_validation->set_rules('nama', 'Nama Supplier', 'required', [
            'required' => 'Nama Supplier Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required', [
            'required' => 'Nomor Telepon Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("supplier/vw_tambah_supplier", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'no_telp' => $this->input->post('no_telp'),
            ];
            $this->Supplier_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data Supplier Berhasil Ditambah!</div>');
            redirect('Supplier');
        }
    }

    public function hapus($id)
    {
        $this->Supplier_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <i class="icon fas fa-info-circle"></i>Data Supplier tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class="icon fas fa-check-circle"></i>Data Supplier Berhasil Dihapus!</div>');
        }
        redirect('Supplier');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Supplier";
        $data['supplier'] = $this->Supplier_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Supplier', 'required', [
            'required' => 'Nama Supplier Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('kota', 'Kota', 'required', [
            'required' => 'Kota Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required', [
            'required' => 'Nomor Telepon Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("supplier/vw_ubah_supplier", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'no_telp' => $this->input->post('no_telp'),
            ];
            $id = $this->input->post('id');
            $this->Supplier_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data Supplier Berhasil Diubah!</div>');
            redirect('Supplier');
        }
    }
}
