<?php 

class Pinjam extends CI_Controller{

	public function index(){

		$data['barang'] = $this->db->get('tb_barang')->result_array();

		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/pinjam', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_pinjaman(){

		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/tambah_pinjaman');
		$this->load->view('templates_user/footer');

		
	}
}

 ?>
