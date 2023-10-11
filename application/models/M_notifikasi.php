<?php
class M_notifikasi extends CI_Model
{
    public function nSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE notifikasi = '1'");
        return $query->row_array();
    }

    public  function nSkdu()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public  function nSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public function nSkbn()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public function nSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    //update notifikasi user
    public function updateSku()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_usaha');
    }

    public function updateSkdu()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_domisili_usaha');
    }

    public function updateSkd()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_domisili');
    }

    public function updateSkbn()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_beda_nama');
    }

    public function updateSkp()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_pemakaman');
    }

    //notifikasi administrator


    public function aSku()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_usaha WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkdu()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili_usaha WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkd()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_domisili WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkbn()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_beda_nama WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkp()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pemakaman WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }
}
