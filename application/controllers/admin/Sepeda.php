<?php if (! defined ('BASEPATH')) exit ('No direct script access allowed');
class Sepeda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/sepeda_model');
	}

	public function index() {	
            if ($this->session->userdata('username')){
                $query = $this->sepeda_model->daftar_sepeda();
                $data = array('title' 	=> 'Histori Peminjaman Sepeda',
					'sepeda'	=> $query,
					'isi' 		=> 'admin/sepeda/sepeda_view');
		$this->load->view('admin/layout/wrapper', $data);
            } else {
                redirect('admin/login');
            }
            
	} // END FUNGSI INDEX

	// Kode untuk menambah sepeda
	public function tambah() {
		if ($this->session->userdata('username')){
                    $this->form_validation->set_rules('jenis_sepeda','Jenis Sepeda','required');
                    $this->form_validation->set_rules('ringkasan','Ringkasan','required');
                    $this->form_validation->set_rules('isi','Isi sepeda','required');

                    if ($this->form_validation->run() === FALSE) {
                            $data = array('title' 	=> 'Menambah Sepeda',
                                                            'isi'	=> 'admin/sepeda/tambah_sepeda'
                                                            );
                            $this->load->view('admin/layout/wrapper', $data);
                    } else {
                            $slug = url_title($this->input->post('jenis_sepeda'), 'dash', TRUE);
                            $data = array (
                                    'jenis_sepeda' 			=> $this->input->post('jenis_sepeda'),
                                    'slug' 				=> $slug,
                                    'ringkasan'			=> $this->input->post('ringkasan'),
                                    'isi'				=> $this->input->post('isi'),
                                    'status_sepeda'	=> $this->input->post('status_sepeda'),
                                    'id_user'			=> $this->input->post('id_user')
                                    );
                            $this->sepeda_model->tambah($data);
                            redirect(base_url().'admin/sepeda/');
                            }
                } else {
                    redirect('admin/login');
                }
	} // END FUNGSI TAMBAH

	// Kode untuk menampilkan halaman edit dan meng-update sepeda
	public function edit($id) {
		if($this->session->userdata('username'))
                {
                	$this->form_validation->set_rules('jenis_sepeda','Jenis Sepeda','required');
                    $this->form_validation->set_rules('ringkasan','Ringkasan','required');
                    $this->form_validation->set_rules('isi','Isi sepeda','required');

                    if ($this->form_validation->run() === FALSE) {
			$data['sepeda']	= $this->sepeda_model->detail_sepeda();
			$data['detail']	= $this->sepeda_model->detail_sepeda($id);
			$data = array (
				'title' 	=> 'Update Sepeda : '.$data['detail']['jenis_sepeda'],
				'sepeda'	=> $this->sepeda_model->detail_sepeda(),
				'detail'	=> $this->sepeda_model->detail_sepeda($id),
				'isi'		=> 'admin/sepeda/edit_sepeda'
				);
			$this->load->view('admin/layout/wrapper', $data);
			// Jika tidak terjadi error maka sepeda akan diupdate
		}
                else
                    {
			$slug = url_title($this->input->post('jenis_sepeda'), 'dash', TRUE);
			$data = array (
				'id_sepeda'		=> $this->input->post('id_sepeda'),
				'jenis_sepeda'	=> $this->input->post('jenis_sepeda'),
				'slug'			=> $slug,
				'ringkasan'		=> $this->input->post('ringkasan'),
				'isi'			=> $this->input->post('isi'),
				'status_sepeda'	=> $this->input->post('status_sepeda'),
				'id_user'		=> $this->input->post('id_user')
				);
			$this->sepeda_model->edit_sepeda($data);
			redirect(base_url().'admin/sepeda/');
		}
                }
                else
                {
                    redirect('admin/login');
                }
	} // END FUNGSI MENAMPILKAN HALAMAN EDIT DAN UPDATE SEPEDA

	// Kode untuk menghapus sepeda
	public function delete($id) {
		$this->sepeda_model->delete_sepeda($id);
		redirect(base_url().'admin/sepeda/');
	} // END FUNGSI DELETE

} // END CLASS SEPEDA
