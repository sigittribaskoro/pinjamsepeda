<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Login extends CI_Controller {
	public function index() {
		$data = array('title' => 'Daftar',
		‘isi’ =>’home/daftar’);
		$this->load->view(‘home/daftar’,$data);
	}
}
