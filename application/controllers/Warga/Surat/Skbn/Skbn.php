<?php
class Skbn extends CI_Controller
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
			'title' => 'Surat Keterangan Beda Nama',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skbn/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
	    $this->form_validation->set_rules('nama','nama', 'required', array('required' => 'Nama tidak boleh kosong !'));
        $this->form_validation->set_rules('nik','nik', 'required', array('required' => 'Nik tidak boleh kosong !'));
        $this->form_validation->set_rules('tempat_lahir','tempat_lahir', 'required', array('required' => 'Tempat lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal_lahir','tanggal_lahir', 'required', array('required' => 'Tanggal lahir tidak boleh kosong !'));
        $this->form_validation->set_rules('kelamin','kelamin', 'required', array('required' => 'Kelamin tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat','alamat', 'required', array('required' => 'Alamat tidak boleh kosong !'));
        $this->form_validation->set_rules('nama_kk','nama_kk', 'required', array('required' => 'Nama KK tidak boleh kosong !'));
        $this->form_validation->set_rules('no_kk','no_kk', 'required', array('required' => 'Nomor KK tidak boleh kosong !'));
        $this->form_validation->set_rules('nama_di_buku_nikah','nama_di_buku_nikah', 'required', array('required' => 'Nama di buku nikah tidak boleh kosong !'));
        $this->form_validation->set_rules('nomor_buku_nikah','nomor_buku_nikah', 'required', array('required' => 'Nomor buku nikah tidak boleh kosong !'));
          
       
        

		$cek = $this->M_surat->cek_skbn();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus diisi semua!');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKBN</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$nama = $this->input->post('nama');
				$nik = $this->input->post('nik');
				$kelamin = $this->input->post('kelamin');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tanggal_lahir = $this->input->post('tanggal_lahir');
				$alamat = $this->input->post('alamat');
				$nama_kk = $this->input->post('nama_kk');
				$no_kk = $this->input->post('no_kk');
				$nama_di_buku_nikah = $this->input->post('nama_di_buku_nikah');
				$nomor_buku_nikah = $this->input->post('nomor_buku_nikah');
				
				$file_ktp = $_FILES['file_ktp']['name'];
				$file_surat_keterangan_rt_rw = $_FILES['file_surat_keterangan_rt_rw']['name'];
				
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


				$noid = $this->M_getData->getSkbnId();
				$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKBN' . '/' . date('m') . '/' . date('Y');
				$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN BEDA NAMA',
					'nomor_surat'   => $nomor,
					'tanggal_surat' => date('d/m/Y'),
					'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
					'nama'  => $nama,
					'nik'  => $nik,
					'kelamin'   => $kelamin,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'alamat' => $alamat,
					'nama_kk' => $nama_kk,
					'no_kk' => $no_kk,
					'nama_di_buku_nikah' => $nama_di_buku_nikah,
				    'nomor_buku_nikah' =>$nomor_buku_nikah,
					
					'file_ktp' => $file_ktp,
					'file_surat_keterangan_rt_rw' => $file_surat_keterangan_rt_rw ,
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

					redirect('skbn/buat-surat', 'refresh');
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

					redirect('skbn/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}
				$this->M_surat->skbn($data);
				$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
				redirect('list-surat', 'refresh');
			}
		}
	}
}
