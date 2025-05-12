<?php
class Ppdb_f extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('Kategori_model');
	}
	public function index(){
		$data['title'] = 'PPDB';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		$data['ppdb'] = $this->Kategori_model->tampil_ppdb();
		$this->template->load('template_detail','ppdb',$data);
	}
}
?>
