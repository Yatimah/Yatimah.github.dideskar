<?php
class M_verifikasi extends CI_Model
{
    //verifikasi sku
    public function getSku()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_usaha')->result();
    }

    public function skuverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_usaha');
    }

    public function komentarsku($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_usaha');
    }

    public function getPreviewSku($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_usaha.id_warga');
        return $this->db->get('surat_keterangan_usaha')->result();
    }

    //verifikasi skdu

    public function getSkdu()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_domisili_usaha')->result();
    }

    public function skduverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_domisili_usaha');
    }

    public function komentarskdu($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_domisili_usaha');
    }

    public function getPreviewSkdu($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_domisili_usaha.id_warga');
        return $this->db->get('surat_keterangan_domisili_usaha')->result();
    }


    //verifikasi skd
    public function getSkd()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_domisili')->result();
    }

    public function skdverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_domisili');
    }

    public function komentarskd($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_domisili');
    }

    public function getPreviewSkd($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_domisili.id_warga');
        return $this->db->get('surat_keterangan_domisili')->result();
    }

    //verifikasi skbn
    public function getSkbn()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_beda_nama')->result();
    }

    public function skbnverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_beda_nama');
    }

    public function komentarskbn($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_beda_nama');
    }

    public function getPreviewSkbn($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_beda_nama.id_warga');
        return $this->db->get('surat_keterangan_beda_nama')->result();
    }

    //verifikasi skp
    public function getSkp()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_pemakaman')->result();
    }

    public function skpverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_pemakaman');
    }

    public function komentarskp($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_pemakaman');
    }

    public function getPreviewSkp($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_pemakaman.id_warga');
        return $this->db->get('surat_keterangan_pemakaman')->result();
    }

    //hapus surat verifikasi
    public function hSuratKeteranganUsaha($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_usaha');
    }

    public function hSuratKeteranganDomisiliUsaha($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_domisili_usaha');
    }

    public function hSuratKeteranganDomisili($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_domisili');
    }

    public function hSuratKeteranganBedaNama($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_beda_nama');
    }

    public function hSuratKeteranganPemakaman($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_pemakaman');
    }
}
