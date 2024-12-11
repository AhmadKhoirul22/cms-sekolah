<?php
class Guru extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
		$this->load->model('User_model');
	}
	public function index(){
		$data['title'] = 'Guru';
		$data['guru'] = $this->User_model->tampil_guru();
		$this->load->view('admin/guru',$data);
	}
	public function tambah(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek <> null){
			$alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->User_model->add_guru();
			$alert = $this->Alert_model->tambah();
			$this->session->set_flashdata('alert','success');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete($id){
		$this->User_model->delete_guru($id);
		$alert = $this->Alert_model->delete();
		$this->session->set_flashdata('alert','success delete');
		redirect($_SERVER['HTTP_REFERER']);
	}
	public function update(){
		$this->db->from('guru')->where('nama',$this->input->post('nama'));
		$cek = $this->db->get()->result_array();
		if($cek <> null){
			$alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert',$alert);
			redirect($_SERVER['HTTP_REFERER']);
		} else{
		$this->User_model->update_guru();
		$alert = $this->Alert_model->update();
		$this->session->set_flashdata('alert',$alert);
		redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
}
?>
