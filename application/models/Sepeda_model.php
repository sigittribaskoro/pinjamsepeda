<?php
class Sepeda_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	// Kode untuk menampilkan data sepeda pada database
	public function daftar_sepeda($read = FALSE) {
		if ($read === FALSE) {
			$query = $this->db->query('SELECT * FROM sepeda WHERE status_sepeda ="Tersedia" ORDER BY id_sepeda DESC');
			return $query->result_array();
		}
		$query = $this->db->get_where('sepeda', array('slug' => $read));
		return $query->row_array();
	}
}
