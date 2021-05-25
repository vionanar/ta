<?php 

class Pinjam extends CI_Controller{

	public function index(){

		$data['pinjam'] = $this->db->get('tb_pinjam')->result_array();

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

	public function insert(){

		$nama_barang =  htmlspecialchars($this->input->post('barang'));
		$jumlah_barang = htmlspecialchars($this->input->post('jumlah'));
		$tgl_pinjam = htmlspecialchars($this->input->post('tgl_pinjam'));
		$tgl_kembali = htmlspecialchars($this->input->post('tgl_kembali'));
		$status	= 0;
		$data = [
			'barang' => $nama_barang,
			'jumlah' => $jumlah_barang,
			'tgl_pinjam' => $tgl_pinjam,
			'tgl_kembali' => $tgl_kembali,
			'status' => $status
		];
		$this->db->insert('tb_pinjam', $data);

		$this->session->set_flashdata('pesan', 'Pinjaman Anda Sedang Di Proses');

		redirect('user/pinjam/tambah_pinjaman');

	}
}

 ?>
