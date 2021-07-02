<?php
class M_main extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getbuku()
    {
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $query = $this->db->get();
        return $query;
    }
    public function getbukubyid($id_buku)
    {
        $this->db->select('*');
        $this->db->from('tbl_buku a');
        $this->db->from('tbl_kategori b', 'b.id_kategori=a.id_kategori', 'left');
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get();
        return $query;
    }
    public function getkategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $query = $this->db->get();
        return $query;
    }
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_buku a');
        $this->db->join('tbl_kategori b', 'a.id_kategori=b.id_kategori');
        $this->db->like('kategori', $keyword);
        $this->db->or_like('nama_pengarang', $keyword);
        $this->db->or_like('judul_buku', $keyword);
        $this->db->or_like('penerbit', $keyword);
        return $this->db->get()->result();
    }
    public function getprofile()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengguna a');
        $this->db->join('tbl_role b', 'a.role_id=b.role_id');
        $this->db->where('username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query;
    }
    public function getdatatransaksi()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengguna a');
        $this->db->join('tbl_peminjaman b', 'a.email=b.email');
        $this->db->join('tbl_buku c', 'b.id_buku=c.id_buku', 'left');
        $query = $this->db->get();
        return $query;
    }
    public function getdatatransaksipengguna()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengguna a');
        $this->db->join('tbl_peminjaman b', 'a.email=b.email');
        $this->db->join('tbl_buku c', 'b.id_buku=c.id_buku', 'left');
        $this->db->where('a.username', $this->session->userdata('username'));
        $query = $this->db->get();
        return $query;
    }
    public function addbuku($data)
    {
        $this->db->insert('tbl_buku', $data);
    }
    public function updatebuku($data, $id_buku)
    {
        $this->db->where('id_buku', $id_buku);
        $this->db->update('tbl_buku', $data);
    }
}
