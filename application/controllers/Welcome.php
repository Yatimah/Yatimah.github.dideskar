<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		is_login();
	}
	public function index()
	{
		$data = array(
			'title'	=> 'Dashboard',
			'users'	=> $this->M_count->cUsers(),
			'warga'	=> $this->M_count->cWarga(),
			'sku'	=> $this->M_count->dPSku(),
			'skdu'	=> $this->M_count->dPSkdu(),
			'skd'	=> $this->M_count->dPSkd(),
			'skbn'	=> $this->M_count->dPskbn(),
			'skp'	=> $this->M_count->dPskp(),
			'mvsku'	=> $this->M_count->mvSku(),
			'mvskdu'=> $this->M_count->mvSkdu(),
			'mvskd'	=> $this->M_count->mvSkd(),
			'mvskbn'=> $this->M_count->mvSkbn(),
			'mvskp' => $this->M_count->mvSkp(),
			'pdsku'	=> $this->M_count->pdSku(),
			'pdskdu'=> $this->M_count->pdSkdu(),
			'pdskd'	=> $this->M_count->pdSkd(),
			'pdskbn'=> $this->M_count->pdSkbn(),
			'pdskp' => $this->M_count->pdSkp(),
			'ptsku'	=> $this->M_count->ptSku(),
			'ptskdu'=> $this->M_count->ptSkdu(),
			'ptskd'	=> $this->M_count->ptSkd(),
			'ptskbn'=> $this->M_count->ptSkbn(),
			'ptskp' => $this->M_count->ptSkp(),
		);
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer');
	}
}
