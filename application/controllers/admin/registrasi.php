<?php 
class Registrasi extends CI_Controller{
	public function index(){
		$data['title'] = "Registrasi";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/registrasi');
		$this->load->view('templates_admin/footer');
	}

	public function daftar(){
		$nama = htmlspecialchars($this->input->post('nama'));
		$nomor = htmlspecialchars($this->input->post('nomor'));
		$pengguna = htmlspecialchars($this->input->post('penguna'));
		$jurusan = htmlspecialchars($this->input->post('jurusan'));

		if ($pengguna == 2) 
		{
		 $data = [
		 	'nama' => $nama,
		 	'nis' => $nomor,
		 	'jurusan' => $jurusan
		 ];
		 $this->db->insert('tb_siswa', $data);
		}else{
		$data = [
			'nama' => $nama,
			'nip' => $nomor
		];
		$this->db->insert('tb_pegawai', $data);
		}

		redirect('admin/registrasi/index');
	}
}


 ?>