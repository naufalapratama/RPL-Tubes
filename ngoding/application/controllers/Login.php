<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('Login');
	}
	public function login()
	{
		$this->form_validation->set_rules('username_adm', 'Username_adm', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('Login', $data);
		} else {
			$username_adm = $this->input->post('username_adm');
			$password = md5($this->input->post('password'));

			$this->db->select('*');
			$this->db->from('tbl_admin');
			$this->db->join('tbl_peminjam', 'tbl_admin.id_pinjam = tbl_peminjam.id_pinjam');
			$this->db->where('username', $username_adm);
			$query = $this->db->get();
			$user = $query->row_array();

			if ($user) {
				if ($password == $user['password']) { //password_verify($password, $user['password'])
					$data = [
						'email_adm'   => $user['username_adm'],
						'id_pinjam'   => $user['id_pinjam'],
						'username_adm'   => $user['username_adm'],
						'password'   => $user['password'],
					];
					$this->session->set_userdata($data);
					redirect('Login');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your user have not been registered.</div>');
				redirect('Login');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('Login');
	}
}
