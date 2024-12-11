<?php
class Profile extends CI_Controller{
	public function sekolah(){
		$data['title'] = 'Profile Sekolah';
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();
		$this->load->view('profile_sekolah',$data);
	}
}
?>
