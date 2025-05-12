<?php 
class User_model extends CI_Model{
	// user
	public function tampil(){
		$this->db->from('user')->order_by('nama','ASC');
		return $this->db->get()->result_array();
	}
	public function User_byID($id){
		$this->db->from('user')->where('id_user',$id);
		return $this->db->get()->row();
	}
	public function tambah(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
			'password' => md5($this->input->post('password')),
		);
		$this->db->insert('user',$data);
	}
	public function delete($id){
		$data = array(
			'id_user' => $id,
		);
		$this->db->delete('user',$data);
	}
	public function update(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			// 'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
		);
		$where = array(
			'id_user' => $this->input->post('id_user')
		);
		$this->db->update('user',$data,$where);
	}
	// end user
	// begin guru
	public function tampil_guru(){
		$this->db->from('guru');
		$this->db->order_by('nama','ASC');
		return $this->db->get()->result_array();
	}
	public function guru_byID($id){
		$this->db->from('guru')->where('id_guru',$id);
		return $this->db->get()->row();
	}
	public function add_guru(){
		$data = [
			'nama' => $this->input->post('nama'),
			'kompetensi' => $this->input->post('kompetensi'),
			'mata_pelajaran' => $this->input->post('mata_pelajaran'),
		];
		$this->db->insert('guru',$data);
	}
	public function delete_guru($id){
		$data = [
			'id_guru' => $id,
		];
		$this->db->delete('guru',$data);
	}
	public function update_guru(){
		$data = [
			'nama' => $this->input->post('nama'),
			'kompetensi' => $this->input->post('kompetensi'),
			'mata_pelajaran' => $this->input->post('mata_pelajaran'),
		];
		$where = [
			'id_guru' => $this->input->post('id_guru')
		];
		$this->db->update('guru',$data,$where);
	}
	// end guru
}
?>
