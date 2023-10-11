<?php
class M_surat extends CI_Model
{
	public function sku($data)
	{
		$this->db->insert('surat_keterangan_usaha', $data);
	}

	public function skdu($data)
	{
		$this->db->insert('surat_keterangan_domisili_usaha', $data);
	}

	public function skd($data)
	{
		$this->db->insert('surat_keterangan_domisili', $data);
	}

	public function skbn($data)
	{
		$this->db->insert('surat_keterangan_beda_nama', $data);
	}

	public function skp($data)
	{
		$this->db->insert('surat_keterangan_pemakaman', $data);
	}

	public function cek_sku()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_usaha')->row_array();
	}

	public function cek_skdu()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_domisili_usaha')->row_array();
	}

	public function cek_skd()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_domisili')->row_array();
	}

	public function cek_skbn()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_beda_nama')->row_array();
	}

	public function cek_skp()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_pemakaman')->row_array();
	}
}
