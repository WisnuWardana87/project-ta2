<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PrestasiFE extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_fe');

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }


    function daftar_user()
    {
        $data['title'] = "Data User FE";
        $config['base_url'] = site_url('PrestasiFE/daftar_user');
        $data['users'] = $this->M_fe->data_user();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/user', $data);
        $this->load->view('templates/footer');
    }
    function register_user()
    {
        $data['title'] = "Register Data User";
        $data['nama_fakultas'] = $this->M_fe->data_fakultas();
        $data['role'] = $this->M_fe->data_role();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/register_user', $data);
        $this->load->view('templates/footer');
    }

    public function update_register_user($id_user)
    {
        $data['title'] = "Registrasi";
        $this->db->where('md5(id_user)', $id_user);
        $data['id_user'] = $this->db->get('user')->row_array();
        $data['nama_fakultas'] = $this->M_fe->data_fakultas();
        $data['role'] = $this->M_fe->data_role();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/edit_register_user', $data);
        $this->load->view('templates/footer');
    }

    public function delete_user()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_user', $key);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            $this->M_fe->delete_user($key);
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger" role="alert">
        <div class="text-center">Data berhasil dihapus !</div>
      </div>'
        );
        redirect('PrestasiFE/daftar_user');
    }
    public function save_register_user()
    {
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == FALSE) {
            $this->register_user();
        } else {
            if ($_POST['id_user'] != '') {
                $this->M_fe->save_update_register_user($_POST);
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">
                <div class="text-center">Data berhasil diubah !</div>
              </div>'
                );
                redirect('PrestasiFE/daftar_user');
            } else {
                $this->M_fe->save_register_user($_POST);
            }
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
            <div class="text-center">Data berhasil ditambahkan !</div>
          </div>'
            );
            redirect('PrestasiFE/daftar_user');
        }
    }

    function daftar_prestasi()
    {
        $data['title'] = "Data Prestasi Mahasiswa";
        $config['base_url'] = site_url('PrestasiFE/daftar_prestasi');
        $data['prestasi'] = $this->M_fe->data_prestasi();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/prestasi', $data);
        $this->load->view('templates/footer');
    }
    function detail($id_prestasi)
    {
        $data['title'] = "Detail Data Prestasi";
        $data['detail_prestasi'] = $this->M_fe->detail($id_prestasi);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/detail_prestasi', $data);
        $this->load->view('templates/footer');
    }
    public function search_prestasi()
    {

        $keyword = $this->input->post('keyword');
        $data['prestasi'] = $this->M_fe->search_prestasi($keyword);
        $data['title'] = "Data Prestasi Mahasiswa";
        $data['tahun'] = $this->M_fe->data_prestasi();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/prestasi', $data);
        $this->load->view('templates/footer');
    }
    function register_prestasi()
    {
        $data['title'] = "Register Data Prestasi";
        $data['nama_jenis'] = $this->M_fe->data_jenis();
        $data['nama_tingkat'] = $this->M_fe->data_tingkat();
        $data['nama_jenis_juara'] = $this->M_fe->data_jenis_juara();
        $data['name'] = $this->M_fe->data_user();
        $data['nama_fakultas'] = $this->M_fe->data_fakultas();
        $data['nama_pembimbing'] = $this->M_fe->data_pembimbing();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/register_prestasi', $data);
        $this->load->view('templates/footer');
    }

    public function update_register_prestasi($id_prestasi)
    {
        $data['title'] = "Registrasi";
        $this->db->where('md5(id_prestasi)', $id_prestasi);
        $data['id_prestasi'] = $this->db->get('tb_prestasi')->row_array();
        $data['nama_jenis'] = $this->M_fe->data_jenis();
        $data['nama_tingkat'] = $this->M_fe->data_tingkat();
        $data['nama_jenis_juara'] = $this->M_fe->data_jenis_juara();
        $data['name'] = $this->M_fe->data_user();
        $data['nama_pembimbing'] = $this->M_fe->data_pembimbing();
        $data['nama_fakultas'] = $this->M_fe->data_fakultas();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('fe/edit_register_prestasi', $data);
        $this->load->view('templates/footer');
    }

    public function delete_prestasi()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_prestasi', $key);
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            $this->M_fe->delete_prestasi($key);
        }
        redirect('PrestasiFE/daftar_prestasi');
    }
    public function save_register_prestasi()
    {
        if ($_POST['id_prestasi'] != '') {
            $this->M_fe->save_update_register_prestasi($_POST);
        } else {
            $this->M_fe->save_register_prestasi($_POST);
        }
        redirect('PrestasiFE/daftar_prestasi');
    }

    public function export()
    {
        $data['title'] = "Laporan Data Prestasi Mahasiswa";
        $export = $this->input->post('export');
        $data['exportdata']  = $this->M_fe->export($export);
        $this->load->view('fe/export', $data);
    }
}
