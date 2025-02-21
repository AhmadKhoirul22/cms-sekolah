<?php 
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == null){
			redirect('auth');
		}
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'Dashboard';
		$this->template->load('admin/template','admin/dashboard',$data);
	}
}
?>
