<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('sepeda_model'); // Berfungsi untuk me-load Sepeda_model.php
	}

	public function index() {
            if ($this->session->has_userdata('username')){
                redirect('admin/dashboard');
            } else {
                $data = array('title'=>'KPPL D - 2017',
		'sepeda'	=>$this->sepeda_model->daftar_sepeda(),
		'isi'		=>'home/index_home'
		);
	$this->load->view('layout/wrapper', $data);
            }	
	}

	// Fungsi untuk membaca sepeda
	/*public function Read($read) {
		$data['sepeda'] 	= $this->sepeda_model->daftar_sepeda();
		$data['detail'] 	= $this->sepeda_model->daftar_sepeda($read);
		$data = array('title' => $data['detail']['jenis_sepeda'],
				'sepeda' 	=> $this->sepeda_model->daftar_sepeda(),
				'detail'	=> $this->sepeda_model->daftar_sepeda($read),
				'isi'		=> 'home/read_view'
				);
		$this->load->view('layout/wrapper', $data);
	}
        */
}
