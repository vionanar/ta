<?php 

class Pinjam extends CI_Controller{

	public function index(){

		$data['title'] = "Daftar Peminjaman";
		$data['pinjam'] = $this->db->get('tb_peminjaman')->result_array();

		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/pinjam', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_pinjaman(){

		$data['title'] = "Tambah Pinjaman";
		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['nama'] = $user['nama'];
		$data['barang'] = $this->db->get('tb_barang')->result_array();
		$data['lokasi'] = $this->db->get('tb_prasarana')->result_array();

		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/tambah_pinjaman', $data);
		$this->load->view('templates_user/footer');
		
	}

	public function insert(){

		$nama = htmlspecialchars($this->input->post('nama'));
		$nama_barang =  htmlspecialchars($this->input->post('barang'));
		$jumlah_barang = htmlspecialchars($this->input->post('jumlah'));
		$tgl_pinjam = htmlspecialchars($this->input->post('tgl_pinjam'));
		$date = date_create($tgl_pinjam);
		$result = date_add($date, date_interval_create_from_date_string('30 days'));
		$batas_kembali = date_format($date, "Y-m-d");
		$status	= 0;
		$lokasi = htmlspecialchars($this->input->post('lokasi'));
		$data = [
			'nama' => $nama,
			'barang' => $nama_barang,
			'jumlah' => $jumlah_barang,
			'tgl_pinjam' => $tgl_pinjam,
			'lokasi' => $lokasi,
			'batas_kembali' => $batas_kembali,
			'tgl_kembali' => null,
			'status' => $status
		];
		$this->db->insert('tb_peminjaman', $data);

		$this->session->set_flashdata('pesan', 'Pinjaman Anda Sedang Di Proses');

		redirect('user/pinjam/tambah_pinjaman');

	}

}

 ?>
