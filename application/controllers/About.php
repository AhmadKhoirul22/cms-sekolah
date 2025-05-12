<?php
class About extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('Kategori_model');
	}
	public function index(){
		$data['title'] = 'About';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		// $this->load->view('about',$data);
		$this->template->load('template_detail','about',$data);
	}
}
?>
