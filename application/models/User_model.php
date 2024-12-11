<?php 
class User_model extends CI_Model{
	public function tampil(){
		$this->db->from('user')->order_by('nama','ASC');
		return $this->db->get()->result_array();
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
}
?>
