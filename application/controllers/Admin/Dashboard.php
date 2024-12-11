<?php 
class Dashboard extends CI_Controller{
	public function index(){
		$data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard',$data);
	}
}
?>
