<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Obat_model');
        $this->load->model('Supplier_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->get();
        $data['supplier'] = $this->Supplier_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view("obat/vw_obat", $data);
        $this->load->view('layout/footer', $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['supplier'] = $this->Supplier_model->get();
        $this->form_validation->set_rules('nama', 'Nama Obat', 'required', [
            'required' => 'Nama Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('status', 'Jenis Obat', 'required', [
            'required' => 'Jenis Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);
        $this->form_validation->set_rules('supplier', 'Supplier', 'required', [
            'required' => 'Supplier Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("obat/vw_tambah_obat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'status' => $this->input->post('status'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'supplier' => $this->input->post('supplier'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/dist/img/obat/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Obat_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data Obat Berhasil Ditambah!</div>');
            redirect('Obat');
        }
    }



    public function hapus($id)
    {
        $this->Obat_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <i class="icon fas fa-info-circle"></i>Data Obat tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class="icon fas fa-check-circle"></i>Data Obat Berhasil Dihapus!</div>');
        }
        redirect('Obat');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Obat";
        $data['obat'] = $this->Obat_model->getById($id);
        $data['supplier'] = $this->Supplier_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Obat', 'required', [
            'required' => 'Nama Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('status', 'Jenis Obat', 'required', [
            'required' => 'Jenis Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'Harga Wajib di isi'
        ]);
        $this->form_validation->set_rules('supplier', 'Supplier', 'required', [
            'required' => 'Supplier Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("obat/vw_ubah_obat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'status' => $this->input->post('status'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'supplier' => $this->input->post('supplier'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/dist/img/obat/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['obat']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/dist/img/obat/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Obat_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" 
            role="alert"><i class="icon fas fa-check-circle"></i>Data obat Berhasil Diubah!</div>');
            redirect('Obat');
        }
    }
}
