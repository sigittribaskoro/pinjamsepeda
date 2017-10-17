<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
class Sepeda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/sepeda_model');
	}

	public function index() {
		$query = $this->sepeda_model->daftar_sepeda();
		$data = array('title' 	=> 'Content Management System - TUTORIAL-IT',
					'sepeda'	=> $query,
					'isi' 		=> 'admin/sepeda/sepeda_view');
		$this->load->view('admin/layout/wrapper', $data);
	}
}
