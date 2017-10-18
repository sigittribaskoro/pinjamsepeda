<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kontak extends CI_Controller {


	// Berfungsi untuk menampilkan halaman kontak
	function index() {
		$data=array('title'=>'Kontak',
		'isi' =>'admin/kontak_view');
		$this->load->view('admin/kontak_view',$data);
		}




}
