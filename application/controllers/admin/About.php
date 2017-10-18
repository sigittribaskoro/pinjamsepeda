<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About extends CI_Controller {


	// Berfungsi untuk menampilkan halaman about
	function index() { 
		$data=array('title'=>'About Us',
		'isi' =>'admin/about_view');
		$this->load->view('admin/about_view',$data);
		}




}