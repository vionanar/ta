<?php 

class Peminjaman extends CI_Controller{

	public function index()
	{
		$data['title'] = "Peminjaman";
		$data['pinjam'] = $this->db->get('tb_peminjaman')->result_array();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/peminjaman', $data);
		$this->load->view('templates_admin/footer');
	}

	public function insert_tgl_kembali($id)
	{
		$tgl_kembali = htmlspecialchars($this->input->post('tgl_kembali'));
		$data = [
			'tgl_kembali' => $tgl_kembali
		];
		$this->db->where('id', $id);
		$this->db->update('tb_peminjaman', $data);

		redirect('admin/peminjaman');
	}

	public function update($id)
	{
		$kondisi = $this->input->post('kondisi');
		$data= [
			'kondisi' => $kondisi
		];
		$this->db->where('id', $id);
		$this->db->update('tb_peminjaman', $data);

		redirect('admin/peminjaman');
	}

	public function terima($id){
		$data= [
			'status' => 1
		];
		$this->db->where('id', $id);
		$this->db->update('tb_peminjaman', $data);

		redirect('admin/peminjaman');
	}
}

 ?>