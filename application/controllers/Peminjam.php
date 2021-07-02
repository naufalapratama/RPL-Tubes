<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjam extends CI_Controller
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
        $this->load->view('dashboard_peminjam', $data);
        $this->load->view('footer');
    }
    public function caribuku()
    {
        $data['title'] = 'Book';

        $keyword = $this->input->post('keyword');
        $data['buku'] = $this->m_main->get_keyword($keyword);

        $this->load->view('header', $data);
        $this->load->view('dashboard_peminjam', $data);
        $this->load->view('footer');
    }
    public function profileP()
    {
        $data['title'] = 'Profile';

        $data['user'] = $this->m_main->getprofile()->result();

        $this->load->view('header', $data);
        $this->load->view('profile_peminjam', $data);
        $this->load->view('footer');
    }
    public function inputpesanan($id_buku = TRUE)
    {
        $this->form_validation->set_rules('tanggal_peminjaman', 'Tanggal_peminjaman', 'required');
        $this->form_validation->set_rules('tanggal_pengembalian', 'Tanggal_pengembalian', 'required');
        $this->form_validation->set_rules('jumlah_buku', 'Jumlah_buku', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Order';

            $data['pesan'] = $this->m_main->getbukubyid($id_buku)->row_array();

            $this->load->view('header', $data);
            $this->load->view('pesan_buku', $data);
            $this->load->view('footer');
        } else {
            $data = [
                'id_buku' => $id_buku,
                'email' => $this->session->userdata('email'),
                'tanggal_peminjaman' => $this->input->post('tanggal_peminjaman'),
                'tanggal_pengembalian' => $this->input->post('tanggal_pengembalian'),
                'jumlah_buku' => $this->input->post('jumlah_buku'),
                'status' => 'pending'
            ];

            $this->db->insert('tbl_peminjaman', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your request has been succes </div>');
            redirect('Peminjam/datatransaksi');
        }
    }
    public function datatransaksi()
    {
        $data['title'] = 'Data Transaksi';

        $data['tr'] = $this->m_main->getdatatransaksipengguna()->result();

        $this->load->view('header', $data);
        $this->load->view('transaksi_pengguna', $data);
        $this->load->view('footer');
    }
}
