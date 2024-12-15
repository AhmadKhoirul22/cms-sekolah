<?php
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
		$this->load->model('User_model');
	}
	public function index(){
		$data['title'] = 'User';
		$data['user'] = $this->User_model->tampil();
		$this->load->view('admin/user',$data);
	}
	public function tambah(){
		$this->db->from('user')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek <> null){
			$alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->User_model->tambah();
			$alert = $this->Alert_model->tambah();
			$this->session->set_flashdata('alert','add');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete($id){
		$this->User_model->delete($id);
		$alert = $this->Alert_model->delete();
		$this->session->set_flashdata('alert','delete');
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update(){
		$this->db->from('user')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek <> null){
			$alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
		$this->User_model->update();
		$alert = $this->Alert_model->update();
		$this->session->set_flashdata('alert','update');
		redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
}
?>
