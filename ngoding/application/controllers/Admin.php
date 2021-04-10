<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_main');
    }

    public function index()
    {
        $data['title'] = 'Home';

        $this->db->select('*');
        $this->db->from('tbl_buku');
        $query = $this->db->get();
        $data['buku'] = $query->result();
        $this->load->view('header', $data);
        $this->load->view('dashboard_admin', $data);
        $this->load->view('footer');
    }
    public function caribuku() //belom
    {
        $data['title'] = 'Cari Buku';

        $this->db->select('*');
        $this->db->from('tbl_buku');
        $query = $this->db->get();
        $data['buku'] = $query->result();

        $this->load->view('header', $data);
        $this->load->view('cari_buku_admin', $data);
        $this->load->view('footer');
    }
    public function detailbuku($id_buku)
    {
        $data['title'] = 'Detail Buku';

        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get();
        $data['buku'] = $query->row_array();

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

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Buku';

            $this->load->view('header', $data);
            $this->load->view('tambah_buku');
            $this->load->view('footer');
        } else {
            $username_adm = $this->session->userdata('username_adm');
            $password = md5($this->input->post('password'));

            $user = $this->db->get_where('tbl_admin', ['username_adm' => $username_adm])->row_array();

            if ($user) {

                if ($password == $user['password']) {
                    $name       = $_FILES['photo']['name'];
                    $temp_name  = $_FILES['photo']['tmp_name'];
                    $location = './uploads/';
                    $data = [
                        'nama_pengarang' => $this->input->post('nama_pengarang'),
                        'judul_buku' => $this->input->post('judul_buku'),
                        'penerbit' => $this->input->post('penerbit'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'photo' => $_FILES['photo']['name'],
                        'username_adm' => $this->session->userdata('username_adm')
                    ];

                    move_uploaded_file($temp_name, $location . $name);

                    $this->db->insert('tbl_buku', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your book has been added !</div>');
                    redirect('Admin/tambahbuku');
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
    public function editbuku($id_buku)
    {
        $data['title'] = 'Data Buku';

        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get();
        $data['buku'] = $query->row_array();

        $this->load->view('header', $data);
        $this->load->view('update_buku');
        $this->load->view('footer');
    }
    public function updatebuku()
    {
        $this->form_validation->set_rules('nama_pengarang', 'nama_pengarang', 'required');
        $this->form_validation->set_rules('judul_buku', 'Judul_buku', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Update Buku';
            $this->db->select('*');
            $this->db->from('tbl_buku');
            $this->db->where('id_buku', $this->session->userdata('id_buku'));
            $query = $this->db->get();
            $data['buku'] = $query->row_array();
            $this->load->view('header', $data);
            $this->load->view('update_buku', $data);
            $this->load->view('footer');
        } else {
            $username_adm = $this->session->userdata('username_adm');
            $password = md5($this->input->post('password'));

            $user = $this->db->get_where('tbl_admin', ['username_adm' => $username_adm])->row_array();

            if ($user) {
                if ($password == $user['password']) {
                    $data = [
                        'nama_pengarang' => $this->input->post('nama_pengarang', true),
                        'judul_buku' => $this->input->post('judul_buku', true),
                        'penerbit' => $this->input->post('penerbit', true),
                        'deskripsi' => $this->input->post('deskripsi', true),
                        'photo' => $_FILES['photo']['name'],
                        'username_adm' => $this->session->userdata('username_adm')
                    ];

                    $where = array(
                        'id_buku' => $this->session->userdata('id_buku')
                    );

                    // $this->db->flush_cache();

                    $this->db->where($where);
                    $this->db->update("tbl_buku", $data);

                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Success !</div>');
                    redirect('Admin/updatebuku');
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
    // public function updatebuku()
    // {
    //     $username_adm = $this->input->post('username_adm', true);

    //     $path = './uploads/buku';
    //     $config['upload_path'] = $path;
    //     $config['allowed_types'] = 'jpg|png|jpeg';
    //     $config['max_size'] = '1000';

    //     $this->load->library('upload', $config);

    //     $this->upload->do_upload('photo');

    //     $nama_pengarang = $this->input->post('nama_pengarang', true);
    //     $judul_buku = $this->input->post('judul_buku', true);
    //     $penerbit = $this->input->post('penerbit', true);
    //     $deskripsi = $this->input->post('deskripsi', true);
    //     $photo = $this->input->post('photo', true);
    //     $file = $this->upload->data();
    //     $photo = $file['file_name'];
    //     $data = array(
    //         'nama_pengarang' => $nama_pengarang,
    //         'judul_buku' => $judul_buku,
    //         'penerbit' => $penerbit,
    //         'deskripsi' => $deskripsi,
    //         'photo' => $photo
    //     );

    //     $this->M_main->update_pegawai($data, $username_adm);
    //     $this->session->set_flashdata('message',  '<div class="alert alert-success" role="alert">Data has been updated!</div>');
    //     redirect('Admin');
    // }

}
