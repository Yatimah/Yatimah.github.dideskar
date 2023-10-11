<?php
class Skd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('M_getData');
		$this->load->Model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Surat Keterangan Domisili',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skd/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
	
       
        $this->form_validation->set_rules('nama','nama', 'required', array('required' => 'Nama tidak boleh kosong !'));
        $this->form_validation->set_rules('nik','nik', 'required', array('required' => 'Nik tidak boleh kosong !'));
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir', 'required', array('required' => 'Tempat lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir', 'required', array('required' => 'Tanggal lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat','alamat', 'required', array('required' => 'Alamat tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat_lama','alamat_lama', 'required', array('required' => 'Alamat Lama tidak boleh kosong !'));
        $this->form_validation->set_rules('mulai','mulai', 'required', array('required' => 'Mulai  tidak boleh kosong !'));
        
       
        
		$cek = $this->M_surat->cek_skd();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus diisi semua!');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKD</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {
              
            	$nama = $this->input->post('nama');
            	$nik = $this->input->post('nik');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tanggal_lahir = $this->input->post('tanggal_lahir');
				$alamat = $this->input->post('alamat');
				$alamat_lama = $this->input->post('alamat_lama');
				$mulai = $this->input->post('mulai');
			
				
				$file_ktp = $_FILES['file_ktp']['name'];
				$file_surat_keterangan_rt_rw = $_FILES['file_surat_keterangan_rt_rw']['name'];
				

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$file_ktp = str_replace('', '', 'skd-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);
			
				
				//acak nama gambar
				$extensi2 = explode('.', $file_surat_keterangan_rt_rw);
				$extensix = strtolower(end($extensi2));
				$acak_angka =  rand(1, 999);
				$file_surat_keterangan_rt_rw = str_replace('', '', 'skd-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensix);



				if ($file_surat_keterangan_rt_rw == '' || $file_ktp == '') {
					$this->session->set_flashdata('error', 'File tidak lengkap !');
					redirect('skd/create', 'refresh');
				} else {
					$noid = $this->M_getData->getSkdId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKD' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT KETERANGAN DOMISILI',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'nama'  => $nama,
						'nik'   => $nik,
						'tempat_lahir'  => $tempat_lahir,
					    'tanggal_lahir'   => $tanggal_lahir,
					    'alamat'   => $alamat,
					    'alamat_lama'   => $alamat_lama,
					    'mulai'   => $mulai,
					    'file_ktp'       => $file_ktp,
						'file_file_surat_keterangan_rt_rw'      => $file_surat_keterangan_rt_rw,
						'status'        => 'Menunggu Verifikasi',
						'created_at'    => date('Y-m-d H:i:s')
					);

					$config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
					$config['file_name'] = $file_ktp;
					$config['allowed_types'] = 'jpg|jpeg|png|PNG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_ktp')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('skd/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config2['upload_path'] = './assets/file_surat_keterangan_rt_rw/'; //folder penyimpanana gambar
					$config2['file_name'] = $file_surat_keterangan_rt_rw;
					$config2['allowed_types'] = 'jpg|jpeg|png|PNG';
					$config2['max_size'] = '3024';
					$config2['remove_space'] = TRUE;
					$this->load->library('upload', $config2);
					$this->upload->initialize($config2);
					if (!$this->upload->do_upload('file_surat_keterangan_rt_rw')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('skd/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}
					$this->M_surat->skd($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
					redirect('list-surat', 'refresh');
				}
			}
		}
	}
}
