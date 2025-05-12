<?php
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
		$this->load->model('User_model');
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'User';
		$this->template->load('admin/template','admin/user',$data);
	}

	public function getUser(){
		$data = $this->User_model->tampil();
		echo json_encode($data);
	}
	public function getUserID($id){
		$data = $this->User_model->User_byID($id);
		echo json_encode($data);
	}
	public function tambah(){
		$this->db->from('user')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->row_array();
		if ($cek) {
			echo json_encode(['status' => 'error', 'message' => 'Nama User sudah terdaftar!']);
		} else {
			$this->User_model->tambah();
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan!']);
		}
	}
	public function delete($id){
		if ($id) {
			$this->User_model->delete($id);
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus!']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Nama User sudah tidak ditemukan!']);
		}
	}
	public function update(){
		$this->db->from('user')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if ($cek) {
			echo json_encode(['status' => 'error', 'message' => 'Nama User sudah terdaftar!']);
		} else {
			$this->User_model->update();
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil diupdate!']);
		}
		
	}
}
?>
