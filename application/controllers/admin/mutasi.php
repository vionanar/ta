<?php 
class Mutasi extends CI_Controller{

	public function index(){

		$data['title'] = "Mutasi";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/mutasi');
		$this->load->view('templates_admin/footer');
	}

}




 ?>