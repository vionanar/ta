<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function masuk()
	{
		$this->load->library('session');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($user) {
			if ($user['password'] != $password) {
				redirect('auth/login');
			}else{
				$data = ['username' => $user['username']];
				$this->session->set_userdata($data);
				redirect();
			}
		}else{
			redirect('auth/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('auth/login/masuk');
	}
}
 ?>
