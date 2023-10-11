<?php
class SuratKeteranganBedaNama extends CI_Controller
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
            'title' => 'History Surat Keterangan Beda Nama',
            'datas' => $this->M_history->getSkbn()
        );

        $this->M_notifikasi->updateSkbn();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skbn/index', $data);
        $this->load->view('layout/footer');
    }

    public function cetak($id)
    {
        $data = array(
            'title'    => 'Cetak Surat Keterangan Beda Nama',
            'data'      => $this->M_cetak->cetakSkbn($id)
        );

        $this->load->view('warga/history/skbn/print', $data);
    }
}
