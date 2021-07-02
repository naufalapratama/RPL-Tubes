<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_main');
    }
    public function index()
    {
        $data['title'] = 'Home';

        $data['buku'] = $this->m_main->getbuku()->result();

        $this->load->view('header', $data);
        $this->load->view('dashboard_admin', $data);
        $this->load->view('footer');
    }
    public function caribuku()
    {
        $data['title'] = 'Book';

        $keyword = $this->input->post('keyword');
        $data['buku'] = $this->m_main->get_keyword($keyword);

        $this->load->view('header', $data);
        $this->load->view('dashboard_admin', $data);
        $this->load->view('footer');
    }
    public function detailbuku($id_buku = true)
    {
        $data['title'] = 'Detail Buku';

        $data['buku'] = $this->m_main->getbukubyid($id_buku)->row_array();

        $this->load->view('header', $data);
        $this->load->view('detail_buku_admin', $data);
        $this->load->view('footer');
    }
    public function tambahbuku()
    {
        $this->form_validation->set_rules('nama_pengarang', 'Nama_pengarang', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul_buku', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Buku';

            $data['kategori'] = $this->m_main->getkategori()->result();

            $this->load->view('header', $data);
            $this->load->view('tambah_buku', $data);
            $this->load->view('footer');
        } else {
            $username = $this->session->userdata('username');
            $password = md5($this->input->post('password'));

            $user = $this->db->get_where('tbl_pengguna', ['username' => $username])->row_array();

            if ($user) {

                if ($password == $user['password']) {
                    $config['upload_path'] = './uploads';
                    $config['allowed_types'] = 'png|jpg|jpeg|gif';
                    $config['max_size'] = 500;

                    $this->load->library('upload', $config);
                    $this->upload->do_upload('photo');

                    $file = $this->upload->data();
                    $photo = $file['file_name'];
                    $data = [
                        'id_kategori' => $this->input->post('id_kategori'),
                        'nama_pengarang' => $this->input->post('nama_pengarang'),
                        'judul_buku' => $this->input->post('judul_buku'),
                        'penerbit' => $this->input->post('penerbit'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'photo' => $photo,
                        'stok' => $this->input->post('stok'),
                        'username' => $this->session->userdata('username')
                    ];
                    // var_dump($data);
                    // die;

                    // move_uploaded_file($temp_name, $location . $name);

                    $this->db->insert('tbl_buku', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your book has been added !</div>');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                    redirect('Admin/tambahbuku');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your user have not been registered.</div>');
                redirect('Admin/tambahbuku');
            }
        }
    }
    public function updatebuku($id_buku = true)
    {
        $this->form_validation->set_rules('nama_pengarang', 'nama_pengarang', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul_buku', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Update Buku';

            $data['title'] = 'Data Buku';
            $data['buku'] = $this->m_main->getbukubyid($id_buku)->row_array();
            $data['kategori'] = $this->m_main->getkategori();
            $this->load->view('header', $data);
            $this->load->view('update_buku', $data);
            $this->load->view('footer');
        } else {
            $username = $this->session->userdata('username');
            $password = md5($this->input->post('password'));

            $user = $this->db->get_where('tbl_pengguna', ['username' => $username])->row_array();

            if ($user) {
                if ($password == $user['password']) {
                    $data = [
                        'id_kategori' => $this->input->post('id_kategori', true),
                        'username' => $this->session->userdata('username'),
                        'nama_pengarang' => $this->input->post('nama_pengarang', true),
                        'judul_buku' => $this->input->post('judul_buku', true),
                        'penerbit' => $this->input->post('penerbit', true),
                        'deskripsi' => $this->input->post('deskripsi', true),
                        'stok' => $this->input->post('stok', true),
                        'photo' => $this->input->post('photo', true),
                    ];
                    // var_dump($data);
                    // die;
                    $where = array(
                        'id_buku' => $id_buku
                    );

                    // $this->db->flush_cache();

                    $this->db->where($where);
                    $this->db->update("tbl_buku", $data);

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Success !</div>');
                    redirect('Admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                    redirect('Admin/updatebuku');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sorry, your email have not been registered.</div>');
                redirect('Admin/updatebuku');
            }
        }
    }
    public function profileA()
    {
        $data['title'] = 'Profile';
        // profile tiap pengguna diambil dari database perpustkaan sesuai role dan id yang berhasil login
        $data['user'] = $this->m_main->getprofile()->result();

        $this->load->view('header', $data);
        $this->load->view('profile_admin', $data);
        $this->load->view('footer');
    }
    public function datatransaksi()
    {
        $data['title'] = 'Data Transaksi';

        $data['tr'] = $this->m_main->getdatatransaksi()->result();

        $this->load->view('header', $data);
        $this->load->view('transaksi_admin', $data);
        $this->load->view('footer');
    }
    public function statuspesan($username)
    {
        $data = array('status' => 'Success');

        $this->db->where('id_pinjam', $username);
        $this->db->update('tbl_peminjaman', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Request updated!</div>');
        redirect('Admin/datatransaksi');
    }
}
