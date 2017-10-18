
<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');
class Login extends CI_Controller {
	public function index() {
		$data = array('title' => 'About Us',
		‘isi’ =>’admin/about_view’);
		$this->load->view(‘admin/about_view’,$data);
	}
}
