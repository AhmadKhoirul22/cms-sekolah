<?php
class Profile extends CI_Controller{
	public function sekolah(){
		$data['title'] = 'Profile Sekolah';
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();

		$this->db->from('guru');
		$this->db->order_by('nama','ASC');
		$data['guru'] = $this->db->get()->result_array();
		$this->load->view('profile_sekolah',$data);
	}
}
?>
