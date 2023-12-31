<?php
class SuratKeteranganDomisili extends CI_Controller
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
            'title' => 'History Surat Keterangan Domisili',
            'datas' => $this->M_history->getSkd(),
        );
        $this->M_notifikasi->updateSkd();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skd/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Domisili',
            'data'  => $this->M_cetak->cetakSkd($id)
        );

        $this->load->view('warga/history/skd/print', $data);
    }
}
