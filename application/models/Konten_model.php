<?php 
class Konten_model extends CI_Model{
	public function tampil_konten(){
		$this->db->from('konten a');
		$this->db->join('kategori b','b.id_kategori = a.id_kategori','left');
		$this->db->join('user c','c.id_user = a.id_user','left');
		$this->db->order_by('a.tanggal','ASC');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function konten_six(){
		$this->db->from('konten a');
		$this->db->join('kategori b','b.id_kategori = a.id_kategori','left');
		$this->db->join('user c','c.id_user = a.id_user','left');
		$this->db->order_by('a.tanggal','DESC');
		$this->db->limit('6');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function get_total_konten(){
		return $this->db->count_all('konten');
	}

	public function get_konten_paginate($limit, $start){
		$this->db->from('konten a');
		$this->db->join('kategori b', 'b.id_kategori = a.id_kategori', 'left');
		$this->db->join('user c', 'c.id_user = a.id_user', 'left');
		$this->db->order_by('a.tanggal', 'DESC');
		$this->db->limit($limit, $start);
		return $this->db->get()->result_array();
	}
	public function konten_bySlug($slug){
		$this->db->from('konten a')->where('a.slug',$slug);
		$this->db->join('kategori b','b.id_kategori = a.id_kategori','left');
		$this->db->join('user c','c.id_user = a.id_user','left');
		return $this->db->get()->row_array();
	}

	public function add($tanggal,$namafoto){
		$data = array(
			'judul' => $this->input->post('judul'),
			'keterangan' => $this->input->post('keterangan'),
			'id_kategori' => $this->input->post('id_kategori'),
			'id_user' => $this->session->userdata('id_user'),
			'tanggal' => $tanggal,
			'foto' => $namafoto,
			'slug' => str_replace(' ','-',$this->input->post('judul')),
		);
		return $data;
	}

	public function delete($id){
		$where = array(
			'foto' => $id
			);
		return $where;
	}

	public function search($keyword) {
    $this->db->select('a.*, b.nama_kategori, c.nama');
    $this->db->from('konten a');
    $this->db->join('kategori b', 'b.id_kategori = a.id_kategori', 'left');
    $this->db->join('user c', 'c.id_user = a.id_user', 'left');

    $this->db->group_start();
    $this->db->where('LOWER(a.judul) LIKE', '%' . strtolower($keyword) . '%');
    $this->db->or_where('LOWER(a.slug) LIKE', '%' . strtolower($keyword) . '%');
    $this->db->or_where('LOWER(c.nama) LIKE', '%' . strtolower($keyword) . '%');
    $this->db->or_where('LOWER(b.nama_kategori) LIKE', '%' . strtolower($keyword) . '%');
    $this->db->group_end();

    return $this->db->get()->result();
	}
}
?>
