<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('header', $data);
		$this->load->view('Home');
		$this->load->view('footer');
	}
	// fungsi ini merupakan dashboard website apabila berhasil login
	// sistem akan memvalidasi, jika data user tidak ada di databaase user tidak bisa login
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('header', $data);
			$this->load->view('Login');
			$this->load->view('footer');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$this->db->select('*');
			$this->db->from('tbl_pengguna a');
			$this->db->join('tbl_role b', 'a.role_id=b.role_id');
			$this->db->where('username', $username);
			$query = $this->db->get();
			$user = $query->row_array();

			if ($user) {
				if ($password == $user['password']) {
					$data = [
						'email'   => $user['email'],
						'username'   => $user['username'],
						'nama'   => $user['nama'],
						'password'   => $user['password'],
						'no_telp'   => $user['no_telp'],
						'alamat'   => $user['alamat'],
						'nim'   => $user['nim'],
						'tahun_angkatan'   => $user['tahun_angkatan'],
						'prodi'   => $user['prodi'],
						'role_id'   => $user['role_id'],
						'role'   => $user['role']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('Admin');
					} else if ($user['role_id'] == 2) {
						redirect('Peminjam');
					}
					// fungsi ketika user memasukan password yang salah akan menampilkan alert
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('Main/login');
				}
				// fungsi ketika user tidak terdaftar di database
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your user have not been registered.</div>');
				redirect('Main/login');
			}
		}
	}
	// fungsi ini merupakan dashboard utama sebelum user login
	public function pindahHalaman()
	{
		if (isset($_SESSION)) {
			if ($_SESSION['status'] == "login-as-user") {
				redirect(base_url('/index.php/LoginUser_controller/homepage_cust'));
			}
		} else {
			redirect(base_url());
		}
	}

	// fungsi digunakan ketika user telah selesai melakukan aktivitas di website tersebut
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('no_telp');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('tahun_angkatan');
		$this->session->unset_userdata('prodi');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been logout.</div>');
		redirect('Main');
	}
}
