<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{

		$this->load->library('session');
		$data['username'] = $this->session->userdata('username');

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/navbar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');

	}
}

?>