<?php
class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('User_model');
		$this->load->library('Template');
	}
	public function sekolah(){
		$data['title'] = 'Profile Sekolah';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		$data['guru'] = $this->User_model->tampil_guru();
		$this->template->load('template_detail','profile_sekolah',$data);
	}
}
?>
