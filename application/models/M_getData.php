<?php
class M_getData extends CI_Model
{
    public function getDataId()
    {
        $this->db->where('users.id_warga', $this->session->userdata('id_warga'));
        $this->db->join('warga', 'warga.id_warga = users.id_warga');
        return $this->db->get('users')->result();
    }

    public function getSkuId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_keterangan_usaha')->row_array();
    }

    public function getSkduId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_keterangan_domisili_usaha')->row_array();
    }

    public function getSkdId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_keterangan_domisili')->row_array();
    }

    public function getSkbnId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_keterangan_beda_nama')->row_array();
    }

    public function getSkpId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_keterangan_pemakaman')->row_array();
    }
}
