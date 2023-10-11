<?php
class SuratKeteranganDomisiliUsaha extends CI_Controller
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
            'title' => 'History Surat Keterangan Domisili Usaha',
            'datas' => $this->M_history->getSkdu(),
        );

        $this->M_notifikasi->updateSkdu();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skdu/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Domisili Usaha',
            'data'  => $this->M_cetak->cetakSkdu($id)
        );

        $this->load->view('warga/history/skdu/print.php', $data);
    }
}
