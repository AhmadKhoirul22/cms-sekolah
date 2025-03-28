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
		$this->template->load('admin/template','admin/guru',$data);
	}
	public function tambah(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek){
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->User_model->add_guru();
			$this->session->set_flashdata('alert','add');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete($id){
		$this->User_model->delete_guru($id);
		$alert = $this->Alert_model->delete();
		$this->session->set_flashdata('alert','delete');
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek){
			// $alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
		$this->User_model->update_guru();
		$this->session->set_flashdata('alert','update');
		redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
?>
