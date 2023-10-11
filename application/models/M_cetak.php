<?php
class M_cetak extends CI_Model
{
    public function cetakSku($id)
    {
        $this->db->where('surat_keterangan_usaha.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_usaha.id_warga');
        return $this->db->get('surat_keterangan_usaha')->result();
    }

    public function cetakSkdu($id)
    {
        $this->db->where('surat_keterangan_domisili_usaha.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_domisili_usaha.id_warga');
        return $this->db->get('surat_keterangan_domisili_usaha')->result();
    }

    public function cetakSkd($id)
    {
        $this->db->where('surat_keterangan_domisili.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_domisili.id_warga');
        return $this->db->get('surat_keterangan_domisili')->result();
    }

    public function cetakSkbn($id)
    {
        $this->db->where('surat_keterangan_beda_nama.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_beda_nama.id_warga');
        return $this->db->get('surat_keterangan_beda_nama')->result();
    }

    public function cetakSkp($id)
    {
        $this->db->where('surat_keterangan_pemakaman.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_pemakaman.id_warga');
        return $this->db->get('surat_keterangan_pemakaman')->result();
    }
}
