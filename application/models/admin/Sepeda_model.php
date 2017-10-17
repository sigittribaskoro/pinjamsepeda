<?php
class Sepeda_model extends CI_Model {
	public function __construct() {
		$this->load->database(); // Untuk memanggil database
	}

	// Kode untuk menampilkan sepeda
	public function daftar_sepeda() {
		$query = $this->db->query(
			'SELECT sepeda.jenis_sepeda, sepeda.status_sepeda, sepeda.slug,
			sepeda.id_sepeda, sepeda.tanggal_pinjam, users.nama
			FROM sepeda, users WHERE sepeda.id_user = users.id_user
			ORDER BY id_sepeda DESC');
	return $query->result_array();
	}

	// Kode untuk menambah sepeda baru
	public function tambah($data) {
		return $this->db->insert('sepeda', $data);
	}

	// Kode untuk menampilkan detail sepeda
	public function detail_sepeda($id = FALSE) {
		if ($id === FALSE) {
			$query = $this->db->get('sepeda');
			return $query->result_array();
		}
		$query = $this->db->get_where('sepeda', array('id_sepeda' => $id));
		return $query->row_array();
	}

	// Kode untuk melakukan fungsi Update
	public function edit_sepeda($data) {
		$this->db->where('id_sepeda', $data['id_sepeda']);
		return $this->db->update('sepeda', $data);
	}

	// Kode untuk melakukan fungsi Delete
	public function delete_sepeda($id) {
		$this->db->where('id_sepeda', $id);
		return $this->db->delete('sepeda');
	}

} // END CLASS SEPEDA_MODEL
