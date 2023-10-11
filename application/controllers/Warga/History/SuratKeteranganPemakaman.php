<?php
class SuratKeteranganPemakaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('M_history');
        $this->load->model('M_cetak');
    }

    public function index()
    {
        $data = array(
            'title' => 'History Surat Keterangan Pemakaman',
            'datas' => $this->M_history->getSkp(),
        );

        $this->M_notifikasi->updateSkp();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skp/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Pemakaman',
            'data'  => $this->M_cetak->cetakSkp($id)
        );

        $this->load->view('warga/history/skp/print', $data);
    }
}
