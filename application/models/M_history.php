<?php
class M_history extends CI_Model
{
    public function getSku()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
        return $this->db->get('surat_keterangan_usaha')->result();
    }

    public function getSkdu()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
        return $this->db->get('surat_keterangan_domisili_usaha')->result();
    }

    public function getSkd()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
        return $this->db->get('surat_keterangan_domisili')->result();
    }

    public function getSkbn()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
        return $this->db->get('surat_keterangan_beda_nama')->result();
    }

    public function getSkp()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
        return $this->db->get('surat_keterangan_pemakaman')->result();
    }
}
