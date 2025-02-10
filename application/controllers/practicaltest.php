<?php
defined('BASEPATH') or exit('No direct script access allowed');


class practicaltest extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{

		$data['title'] = 'Login Admin';
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			$this->_login();
		}
	}
	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('admin', ['username' => $username])->row_array();
		if ($user) {
			if ($password == $user['password']) {
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('home/index');
			} else {
				redirect('practicaltest');
				die;
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('practicaltest');
	}
}
