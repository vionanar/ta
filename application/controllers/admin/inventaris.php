<?php 

class Inventaris extends CI_Controller{

	public function index(){

		$data['inventaris'] = $this->db->get('tb_inventaris')->result_array();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/inventaris', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_inventaris(){

		//ambil data dari table katerori//
		$data['kategori'] = $this->db->get('tb_kategori')->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/tambah_inventaris', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert(){

		//ambil inputan dari form view//
		$nama = htmlspecialchars($this->input->post('nama_barang'));
		$jumlah = htmlspecialchars($this->input->post('jumlah'));
		$kategori = htmlspecialchars($this->input->post('kategori'));
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$tgl_masuk = htmlspecialchars($this->input->post('tgl_masuk'));

		//cek database invnetaris ada berapa baris//
		$data_kategori = $this->db->get_where('tb_kategori', ['nama_kategori'=> $kategori])->row_array();
		$this->db->like('no_inventaris', $data_kategori['kode'], 'after');
		$inventaris = $this->db->get('tb_inventaris')->result_array();
		if ($jumlah == 1) {
			$no_inventaris = count($inventaris) +1;
			$data = [
				'no_inventaris' => $data_kategori['kode'].$no_inventaris,
				'nama_barang' => $nama,
				'status' => 'tersedia',
				'lokasi' => 'gudang'
			];
			$this->db->insert('tb_inventaris', $data);
		}else{
			$no_inventaris = [];
			$jumlah_data = count($inventaris) + 1;
			for ($i=$jumlah_data; $i < $jumlah_data + $jumlah ; $i++) { 
				$data = [
					'no_inventaris' => $data_kategori['kode'].$i,
					'nama_barang' => $nama,
					'status' => 'tersedia',
					'lokasi' => 'gudang'
				];
				$this->db->insert('tb_inventaris', $data);
			}
		}

		// input ke tabel barang
		$barang = $this->db->get_where('tb_barang', ['nama_barang'=> $nama])->row_array();
		if (!$barang) {
			// insert
			$data = [
				'nama_barang' =>$nama,
				'jumlah' => $jumlah,
				'kategori' => $kategori,
				'keterangan' => $keterangan,
				'tgl_masuk' => $tgl_masuk
			];
			$this->db->insert('tb_barang', $data);
		}else{
			//  update
			$data =[
				'jumlah' =>$jumlah + $barang['jumlah']
			];
			$this->db->where('id_barang', $barang['id_barang']);
			$this->db->update('tb_barang', $data);
		}

		redirect('admin/inventaris');
	}
}


 ?>