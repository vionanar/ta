<?php 

class Prasarana extends CI_Controller{

	public function index()
	{
		$data['title'] = "Prasarana";
		$data['prasarana'] = $this->db->get('tb_prasarana')->result_array();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/prasarana', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_ruangan(){

		$ruangan = htmlspecialchars($this->input->post('ruangan'));
		$keterangan = htmlspecialchars($this->input->post('keterangan'));
		$data = [
			'ruangan' => $ruangan,
			'keterangan' => $keterangan
		];

		$this->db->insert('tb_prasarana', $data);

		redirect('admin/prasarana');
	}

	public function detail($ruangan)
	{
		$data['title'] = "Detail Ruangan";
		$data['sarana'] = $this->db->get_where('tb_sarana', ['ruangan' => $ruangan])->result_array();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/detail', $data);
		$this->load->view('templates_admin/footer');
	}
}
 ?>