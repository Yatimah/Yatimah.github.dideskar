<?php
class SuratKeteranganBedaNama extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_verifikasi');
	}

	public function index()
	{
		$data = array(
			'title' => 'Verifikasi Surat Keterangan Beda Nama',
			'datas' => $this->M_verifikasi->getSkbn(),
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/verifikasi/skbn/surat_keterangan_beda_nama', $data);
		$this->load->view('layout/footer');
	}


	public function skbnverif()
	{
		$id =  $this->input->post('id');
		$id_warga = $this->input->post('id_warga');
		$status = $this->input->post('status');

		if ($status == 'Diterima') {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 1,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skbnverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-keterangan-beda-nama', 'refresh');
		} else if ($status == 'Ditolak') {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 0,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skbnverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-keterangan-beda-nama', 'refresh');
		} else {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 0,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skbnverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-keterangan-beda-nama', 'refresh');
		}
	}

	public function skbnkomentar($id)
	{
		$komentar = $this->input->post('komentar');

		$data = array(
			'komentar' => $komentar
		);
		$this->M_verifikasi->komentarskbn($data, $id);
		$this->session->set_flashdata('success', 'Komentar berhasil di simpan !');
		redirect('verifikasi-surat-keterangan-beda-nama', 'refresh');
	}

	public function preview($id)
	{
		$data = array(
			'title' => 'Preview Surat Keterangan Beda Nama',
			'datas'  => $this->M_verifikasi->getPreviewSkbn($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/verifikasi/skbn/preview', $data);
		$this->load->view('layout/footer');
	}

	public function hapus($id)
	{
		$this->M_verifikasi->hSuratKeteranganBedaNama($id);
		$this->session->set_flashdata('session', 'Data berhasil di hapus !');
		redirect('verifikasi-surat-keterangan-beda-nama', 'refresh');
	}
}
