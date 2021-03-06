<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		// jika tidak ada username disession maka arahkan ke halaman login
		if (!$this->session->userdata('username')){
			redirect('auth/login');
		}
	}

	public function index()
	{

		$data['title'] = "Dashboard Admin";
		$data['username'] = $this->session->userdata('username');

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');

	}
}

?>