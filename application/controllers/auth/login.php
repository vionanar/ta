<?php 

class Login extends CI_Controller{

	public function index()
	{
				// jika ada username di session maka diarahkan ke dashboard
		if ($this->session->userdata('username')) {
			redirect();
		}
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

				if($user['role_id'] == 2 || $user['role_id'] == 3){
					redirect('user/Dashboard');
				}else{
					redirect();					
				}
			}
		}else{
			redirect('auth/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('auth/login');
	}
}
 ?>
