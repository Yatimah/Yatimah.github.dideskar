<?php
class M_count extends CI_Model
{
    public function cUsers()
    {
        return $this->db->get('users')->num_rows();
    }

    public function cWarga()
    {
        return $this->db->get('warga')->num_rows();
    }
    //jmlh permohonan
    public function dPsku()
    {
        return $this->db->get('surat_keterangan_usaha')->num_rows();
    }

    public function dPskdu()
    {
        return $this->db->get('surat_keterangan_domisili_usaha')->num_rows();
    }

    public function dPskd()
    {
        return $this->db->get('surat_keterangan_domisili')->num_rows();
    }

    public function dPskbn()
    {
        return $this->db->get('surat_keterangan_beda_nama')->num_rows();
    }

    public function dPskp()
    {
        return $this->db->get('surat_keterangan_pemakaman')->num_rows();
    }

    //permohonan menunggu verifikasi

    public function mvSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkdu()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkbn()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    //permohonan diterima
    public function pdSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkdu()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkbn()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE status = 'Diterima'");
        return $query->row_array();
    }

    //permohonan ditolak
    public function ptSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkdu()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkbn()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE status = 'Ditolak'");
        return $query->row_array();
    }
}
