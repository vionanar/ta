<?php 
class Pengembalian extends CI_Controller{

	public function index(){

		$data['title'] = "Pengembalian Barang";
		$data['pengembalian'] = $this->db->get('tb_pengembalian')->result_array();
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['nama'] = $user['nama'];
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/pengembalian', $data);
		$this->load->view('templates_user/footer');
	}

	public function insert(){

		$nama = htmlspecialchars($this->input->post('nama'));
		$nama_barang =  htmlspecialchars($this->input->post('barang'));
		$jumlah_barang = htmlspecialchars($this->input->post('jumlah'));
		$tgl_kembali = htmlspecialchars($this->input->post('tgl_kembali'));
		$status	= 0;
		$data = [
			'nama' => $nama,
			'barang' => $nama_barang,
			'jumlah' => $jumlah_barang,
			'tgl_kembali' => $tgl_kembali,
			'status' => $status
		];
		$this->db->insert('tb_pengembalian', $data);

		$this->session->set_flashdata('pesan', 'Barang telah dikembalikan, Terimakasih');

		redirect('user/pengembalian');

	}
}

 ?>