<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Login extends CI_Controller {
	public function indexk() {
		$data = array('title' => 'Kontak',
		‘isi’ =>’admin/kontak_view’);
		$this->load->view(‘admin/kontak_view’,$data);
	}
}
