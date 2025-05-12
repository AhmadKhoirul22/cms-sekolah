<?php 
class Sambutan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('Kategori_model');
	}
	public function index(){
		$data['title'] = 'Sambutan Kepala Sekolah';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		$this->template->load('template_detail','sambutan',$data);
	}
}
?>
