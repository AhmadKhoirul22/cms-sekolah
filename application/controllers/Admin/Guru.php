<?php
class Guru extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == null){
			redirect('auth');
		}
		$this->load->model('Alert_model');
		$this->load->model('User_model');
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'Guru';
		$data['guru'] = $this->User_model->tampil_guru();
		$this->template->load('admin/template','admin/guru',$data);
	}
	public function getGuruAll(){
		$data = $this->User_model->tampil_guru();
		echo json_encode($data);
	}
	public function getGuruID($id){
		$data = $this->User_model->guru_byID($id);
		echo json_encode($data);
	}
	public function tambah(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->row_array();
		if ($cek) {
			echo json_encode(['status' => 'error', 'message' => 'Nama Guru sudah terdaftar!']);
		} else {
			$this->User_model->add_guru();
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan!']);
		}
	}
	public function delete($id){
		if ($id) {
			$this->User_model->delete_guru($id);
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus!']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Nama Guru tidak ditemukan!']);
		}
	}
	public function update(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->row_array();
		if ($cek) {
			echo json_encode(['status' => 'error', 'message' => 'Nama Guru sudah terdaftar!']);
		} else {
			$this->User_model->update_guru();
			echo json_encode(['status' => 'success', 'message' => 'Data berhasil diupdate!']);
		}
	}
}
?>

