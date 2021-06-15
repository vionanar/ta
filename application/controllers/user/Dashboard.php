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

		$data['title'] = "Dashboard Peminjam";
		$data['username'] = $this->session->userdata('username');

		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('templates_user/navbar');
		$this->load->view('user/dashboard', $data);
		$this->load->view('templates_user/footer');

	}
}

?>