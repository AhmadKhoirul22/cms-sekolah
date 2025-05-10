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
<!-- hosting = 700k / tahun
	 web = 1,5 jt (nego)
	 pemeliharaan web + tambah fitur2 = 40k / bulan
	 2,2 jt => total tanpa penambahan fitur
	 pemeliharaan domain 300k / bulan
-->
