<?php 

class Sarana extends CI_Controller{

	public function index(){

		$data['title'] = "Sarana";
		$data['sarana'] = $this->db->get('tb_sarana')->result_array();
		$data['ruangan'] = $this->db->get('tb_prasarana')->result_array();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/sarana', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_sarana(){

		$data['barang'] = $this->db->get('tb_barang')->result_array();
		$data['ruangan'] = $this->db->get('tb_prasarana')->result_array();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/tambah_sarana', $data);
		$this->load->view('templates_admin/footer');

	}

	public function insert(){

		$nama_sarana = htmlspecialchars($this->input->post('nama_sarana'));
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$ruangan = htmlspecialchars($this->input->post('ruangan'));
		$no_inventaris = htmlspecialchars($this->input->post('no_inventaris'));
		$jumlah = htmlspecialchars($this->input->post('jumlah'));
		$kelayakan = htmlspecialchars($this->input->post('kelayakan'));
		$data = [
			'nama_sarana' => $nama_sarana,
			'keterangan' => $keterangan,
			'ruangan' => $ruangan,
			'no_inventaris' => $no_inventaris,
			'jumlah' => $jumlah,
			'kelayakan' => $kelayakan
		];

		$this->db->insert('tb_sarana', $data);

		redirect('admin/sarana');

	}

	public function edit_sarana(){

		$id = htmlspecialchars($this->input->post('id_sarana'));;
		$nama_sarana = htmlspecialchars($this->input->post('nama_sarana'));;
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$ruangan = htmlspecialchars($this->input->post('ruangan'));
		$no_inventaris = htmlspecialchars($this->input->post('no_inventaris'));
		$jumlah = htmlspecialchars($this->input->post('jumlah'));
		$kelayakan = htmlspecialchars($this->input->post('kelayakan'));
		$data = [
			'nama_sarana' => $nama_sarana,
			'keterangan' => $keterangan,
			'ruangan' => $ruangan,
			'no_inventaris' => $no_inventaris,
			'jumlah' => $jumlah,
			'kelayakan' => $kelayakan
		];

		$this->db->where('id_sarana', $id);
		$this->db->update('tb_sarana', $data);

		redirect('admin/sarana');
	}

	public function hapus($id){

		$this->db->delete('tb_sarana', ['id_sarana' => $id]);
				redirect('admin/sarana');

	}
}
 ?>

