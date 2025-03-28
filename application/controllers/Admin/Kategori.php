<?php
class Kategori extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == null){
			redirect('auth');
		}
		$this->load->model('Alert_model');
		$this->load->model('Kategori_model');
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'Kategori';
		$this->template->load('admin/template','admin/kategori',$data);
	}

	public function getKategori(){
		$data = $this->Kategori_model->tampil();
		echo json_encode($data);
	}
	public function getKategoriID($id){
		$data = $this->Kategori_model->kategori_byID($id);
		echo json_encode($data);
	}
	public function tambah(){
		$this->db->from('kategori')->where('nama_kategori',$this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek){
		// $alert = $this->Alert_model->warning();
		$this->session->set_flashdata('alert','warning');
		redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->Kategori_model->tambah();
			$alert = $this->Alert_model->tambah();
			$this->session->set_flashdata('alert','add');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function update(){
		$this->db->from('kategori')->where('nama_kategori',$this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek){
		// $alert = $this->Alert_model->warning();
		$this->session->set_flashdata('alert','warning');
		redirect($_SERVER['HTTP_REFERER']);
		} else {
			$this->Kategori_model->update();
			$alert = $this->Alert_model->update();
			$this->session->set_flashdata('alert','update');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete($id){
		$this->Kategori_model->delete($id);
		$alert = $this->Alert_model->delete();
		$this->session->set_flashdata('alert','delete');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>
