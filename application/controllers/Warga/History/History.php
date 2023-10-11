<?php
class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'History | List Surat',
            'sku'   => $this->M_notifikasi->nSku(),
            'skdu'  => $this->M_notifikasi->nSkdu(),
            'skd'   => $this->M_notifikasi->nSkd(),
            'skbn'   => $this->M_notifikasi->nSkbn(),
            'skp'  => $this->M_notifikasi->nSkp(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
