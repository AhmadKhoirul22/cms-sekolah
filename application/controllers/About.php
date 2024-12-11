<?php
class About extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'About';
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();
		$this->load->view('about',$data);
	}
}
?>
