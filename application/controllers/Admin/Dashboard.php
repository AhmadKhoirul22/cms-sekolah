<?php 
class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == null){
			redirect('auth');
		}
	}
	public function index(){
		$data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard',$data);
	}
}
?>
