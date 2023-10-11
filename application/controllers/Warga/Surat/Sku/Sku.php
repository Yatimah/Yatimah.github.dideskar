<?php
class Sku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('M_getData');
		$this->load->model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Surat Keterangan Usaha',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/sku/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
	    	
			
	      	$cek = $this->M_surat->cek_sku();

	
			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKU</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {
			    
			    $nama = $this->input->post('nama');
			   $kelamin = $this->input->post('kelamin');
			    $tempat_lahir = $this->input->post('tempat_lahir');
			    $tanggal_lahir = $this->input->post('tanggal_lahir');
                $kewarganegaraan = $this->input->post('kewarganegaraan');
				$nik = $this->input->post('nik');
				$pekerjaan = $this->input->post('pekerjaan');
				$alamat = $this->input->post('alamat');
				$keperluan = $this->input->post('keperluan');
				$nama_usaha = $this->input->post('nama_usaha');
				$alamat_usaha = $this->input->post('alamat_usaha');
			
				$file_ktp = $_FILES['file_ktp']['name'];
				$file_surat_keterangan_rt_rw= $_FILES['file_surat_keterangan_rt_rw']['name'];
				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp = str_replace('', '', 'sku-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi2 = explode('.', $file_surat_keterangan_rt_rw);
				$extensix = strtolower(end($extensi2));
				$acak_angka =  rand(1, 999);
				$filesuratketeranganrtrw = str_replace('', '', 'sku-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensix);


				$noid = $this->M_getData->getSkuId();
				$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKU' . '/' . date('m') . '/' . date('Y');
				$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN USAHA',
					'nomor_surat'   => $nomor,
					'tanggal_surat' => date('d/m/Y'),
					'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
					'nama' => $nama,
					'kelamin' => $kelamin,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,	
					'kewarganegaraan' => $kewarganegaraan,
					'nik' => $nik,
					'pekerjaan' => $pekerjaan,
					'alamat' => $alamat,
					'keperluan' => $keperluan,
					'nama_usaha' => $nama_usaha,
					'alamat_usaha' => $alamat_usaha,
					'file_ktp' => $file_ktp,
					'file_surat_keterangan_rt_rw' =>$file_surat_keterangan_rt_rw,
					'status' => 'Menunggu Verifikasi',
					'created_at' => date('Y-m-d H:i:s')
				);

				$config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
				$config['file_name'] = $file_ktp;
				$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
				$config['max_size'] = '3024';
				$config['remove_space'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file_ktp')) {
					$this->session->set_flashdata('danger', $this->upload->display_errors());

					redirect('sku/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}

				$config2['upload_path'] = './assets/file_surat_keterangan_rt_rw/'; //folder penyimpanan gambar
				$config2['file_name'] = $file_surat_keterangan_rt_rw ;
				$config2['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
				$config2['max_size'] = '3024';
				$config2['remove_space'] = TRUE;
				$this->load->library('upload', $config2);
				$this->upload->initialize($config2);
				if (!$this->upload->do_upload('file_surat_keterangan_rt_rw')) {
					$this->session->set_flashdata('danger', $this->upload->display_errors());

					redirect('sku/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}
				$this->M_surat->sku($data);
				$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
				redirect('list-surat', 'refresh');
			}
		
	}
}