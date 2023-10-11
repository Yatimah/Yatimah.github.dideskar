<?php
class Skp extends CI_Controller
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
			'title' => 'Surat Keterangan Pemakaman',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skp/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
	    
	    $this->form_validation->set_rules('hubungan','hubungan', 'required', array('required' => 'Hubungan dengan yang meninggal harus diisi !'));
	    $this->form_validation->set_rules('nama_alm','nama_alm', 'required', array('required' => 'Nama Almarhum tidak boleh kosong !'));
        $this->form_validation->set_rules('bin','bin', 'required', array('required' => 'Bin / Binti tidak boleh kosong !'));
         $this->form_validation->set_rules('nik','nik', 'required', array('required' => 'NIK tidak boleh kosong !'));
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir', 'required', array('required' => 'Tempat lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir', 'required', array('required' => 'Tanggal lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('kewarganegaraan','kewarganegaraan', 'required', array('required' => 'Kewarganegaraan tidak boleh kosong !'));
        $this->form_validation->set_rules('status_perkawinan','status_perkawinan', 'required', array('required' => 'Status_perkawinan tidak boleh kosong !'));
        $this->form_validation->set_rules('pekerjaan','pekerjaan', 'required', array('required' => 'Pekerjaan tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat','alamat', 'required', array('required' => 'Alamat tidak boleh kosong !'));
        $this->form_validation->set_rules('agama','agama', 'required', array('required' => 'Agama tidak boleh kosong !'));
        
        $this->form_validation->set_rules('hari_meninggal','hari_meninggal', 'required', array('required' => 'Hari Meninggal tidak boleh kosong !'));
        $this->form_validation->set_rules('hari_makam','hari_makam', 'required', array('required' => 'Hari Makam tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal_meninggal','tanggal_meninggal', 'required', array('required' => 'Tanggal Meninggal tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal_makam','tanggal_makam', 'required', array('required' => 'Tanggal Makam tidak boleh kosong !'));
        $this->form_validation->set_rules('jam_meninggal','jam_meninggal', 'required', array('required' => 'Jam Meninggal tidak boleh kosong !'));
        $this->form_validation->set_rules('jam_makam','jam_makam', 'required', array('required' => 'Jam Makam tidak boleh kosong !'));
        $this->form_validation->set_rules('tempat_meninggal','tempat_meninggal', 'required', array('required' => 'Tempat Meninggal tidak boleh kosong !'));
        $this->form_validation->set_rules('sebab_meninggal','sebab_meninggal', 'required', array('required' => 'Sebab Meninggal tidak boleh kosong !'));
        $this->form_validation->set_rules('tempat_pemakaman','tempat_pemakaman', 'required', array('required' => 'Tempat Pemakaman tidak boleh kosong !'));
        $this->form_validation->set_rules('keperluan','keperluan', 'required', array('required' => 'Keperluan tidak boleh kosong !'));
	
	
	

		$cek = $this->M_surat->cek_skp();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus diisi semua!');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKP</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$hubungan = $this->input->post('hubungan');
				$nama = $this->input->post('nama_alm');
				$bin = $this->input->post('bin');
				$nik = $this->input->post('nik');
				$kelamin = $this->input->post('kelamin');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tanggal_lahir = $this->input->post('tanggal_lahir');
				$kewarganegaraan = $this->input->post('kewarganegaraan');
				$agama = $this->input->post('agama');
				$statusperkawinan = $this->input->post('status_perkawinan');
				$pekerjaan = $this->input->post('pekerjaan');
				$alamat = $this->input->post('alamat');
				
				$file_ktp = $_FILES['file_ktp']['name'];
				$file_surat_keterangan_rt_rw = $_FILES['file_surat_keterangan_rt_rw']['name'];
				
				$hari_meninggal = $this->input->post('hari_meninggal');
				$hari_makam = $this->input->post('hari_makam');
				$tanggal_meninggal = $this->input->post('tanggal_meninggal');
				$tanggal_makam = $this->input->post('tanggal_makam');
				$jam_meninggal = $this->input->post('jam_meninggal');
				$jam_makam = $this->input->post('jam_makam');
				$tempat_meninggal  = $this->input->post('tempat_meninggal');
				$tmp_pemakaman = $this->input->post('tempat_pemakaman');
				$sebab_meninggal = $this->input->post('sebab_meninggal');
				$keperluan = $this->input->post('keperluan');

				 $date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$file_ktp = str_replace('', '', 'skbn-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				
				//acak nama gambar
				$extensi2 = explode('.', $file_ktp);
				$extensix = strtolower(end($extensi2));
				$acak_angka =  rand(1, 999);
				$file_surat_keterangan_rt_rw = str_replace('', '', 'skbn-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensix);


				$noid = $this->M_getData->getSkpId();
				$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKP' . '/' . date('m') . '/' . date('Y');
				$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN PEMAKAMAN',
					'nomor_surat'   => $nomor,
					'tanggal_surat' => date('d/m/Y'),
					'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
					'hubungan'  => $hubungan,
					'nama_alm'  => $nama,
					'bin'   => $bin,
					'nik'   => $nik,
					'kelamin' => $kelamin,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'kewarganegaraan' => $kewarganegaraan,
					'agama' => $agama,
					'status_perkawinan' => $statusperkawinan,
					'pekerjaan' => $pekerjaan,
					'alamat' => $alamat,
					'file_ktp' => $file_ktp,
					'file_surat_keterangan_rt_rw' => $file_surat_keterangan_rt_rw,
					'hari_meninggal'  => $hari_meninggal,
					'hari_makam'  => $hari_makam,
					'tanggal_meninggal' => $tanggal_meninggal,
					'tanggal_makam' => $tanggal_makam,
					'jam_meninggal' => $jam_meninggal,
					'jam_makam' => $jam_makam,
					'tempat_meninggal' => $tempat_meninggal,
					'sebab_meninggal' => $sebab_meninggal,
					'tempat_pemakaman' => $tmp_pemakaman,
					'keperluan' => $keperluan,
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

					redirect('skp/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}

				$config2['upload_path'] = './assets/file_surat_keterangan_rt_rw/'; //folder penyimpanan gambar
				$config2['file_name'] = $file_surat_keterangan_rt_rw;
				$config2['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
				$config2['max_size'] = '3024';
				$config2['remove_space'] = TRUE;
				$this->load->library('upload', $config2);
				$this->upload->initialize($config2);
				if (!$this->upload->do_upload('file_surat_keterangan_rt_rw')) {
					$this->session->set_flashdata('danger', $this->upload->display_errors());

					redirect('skp/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}
				$this->M_surat->skp($data);
				$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
				redirect('list-surat', 'refresh');
			}
		}
	}
}
