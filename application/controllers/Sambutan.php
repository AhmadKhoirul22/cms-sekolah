<?php 
class Sambutan extends CI_Controller{
	public function index(){
		$data['title'] = 'Sambutan Kepala Sekolah';
		
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();

		$this->load->view('sambutan',$data);
	}
}
?>
