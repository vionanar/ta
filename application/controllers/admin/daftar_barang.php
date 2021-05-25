<?php 

class Daftar_barang extends CI_Controller{

	public function index(){

		$data['daftar_barang'] = $this->db->get('tb_barang')->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/daftar_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_barang(){

		//tambah barang untuk menyimpan kedatabase//
		$nama_barang = htmlspecialchars($this->input->post('nama_barang'));
		$stok = htmlspecialchars($this->input->post('stok'));
		$kondisi = htmlspecialchars($this->input->post('kondisi'));
		$jenis = htmlspecialchars($this->input->post('jenis'));
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$tgl_masuk = htmlspecialchars($this->input->post('tgl_masuk'));
		$data = [
			'nama_barang' => $nama_barang,
			'stok' => $stok,
			'kondisi' => $kondisi,
			'jenis' => $jenis,
			'keterangan' => $keterangan,
			'tgl_masuk' => $tgl_masuk
		];

		$this->db->insert('tb_barang', $data);


		redirect('admin/daftar_barang');
	}

	public function edit_barang(){

		//edit barang pada menu daftar barang//
		$id = htmlspecialchars($this->input->post('id_barang'));
		$nama_barang = htmlspecialchars($this->input->post('namaa_barang'));
		$stok = htmlspecialchars($this->input->post('stok'));
		$kondisi = htmlspecialchars($this->input->post('kondisi'));
		$jenis = htmlspecialchars($this->input->post('jenis'));
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$tgl_masuk = htmlspecialchars($this->input->post('tgl_masuk'));
		$data = [
			'nama_barang' => $nama_barang,
			'stok' => $stok,
			'kondisi' => $kondisi,
			'jenis' => $jenis,
			'keterangan' => $keterangan,
			'tgl_masuk' => $tgl_masuk
		];

		$this->db->where('id_barang', $id);
		$this->db->update('tb_barang', $data);

		redirect('admin/daftar_barang');
	}

	public function hapus_barang($id){

		//digunakan untuk mengahpus data barang yang berada di menu daftar barang//
		$this->db->delete('tb_barang', ['id_barang' => $id]);
				redirect('admin/daftar_barang');
	}

	}

 ?>