<?php
defined('BASEPATH') or exit('NO direct script accses allowed');
class Frontend extends CI_Controller
{
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_prestasi');
    }

    public function index()
    {
        $data['prestasi'] = $this->M_prestasi->data_prestasi_frontend();
        $this->load->view('templates/index_frontend', $data);
    }
}
