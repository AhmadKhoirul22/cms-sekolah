<?php
class Kategori_model extends CI_Model{
	public function tampil(){
		$this->db->from('kategori');
		return $this->db->get()->result_array();
	}
	public function kategori_byID($id){
		$this->db->from('kategori')->where('id_kategori',$id);
		return $this->db->get()->row();
	}
	public function tambah(){
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->db->insert('kategori',$data);
	}
	public function update(){
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$where = array(
			'id_kategori' => $this->input->post('id_kategori')
		);
		$this->db->update('kategori',$data,$where);
	}
	public function delete($id){
		$data = array(
			'id_kategori' => $id 
		);
		$this->db->delete('kategori',$data);
	}

	public function tampil_profile(){
		return $this->db->from('profile')->get()->row();
	}
	public function tampil_ppdb(){
		return $this->db->from('ppdb')->get()->row();
	}
}
?>
