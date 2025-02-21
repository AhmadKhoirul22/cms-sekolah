<?php 
class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'Profile';
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();

		$this->template->load('admin/template','admin/profile',$data);
	}
	public function update(){
		$data = array(
			'nama_profile' => $this->input->post('nama_profile'),
			'alamat_profile' => $this->input->post('alamat_profile'),
			'keterangan_profile' => $this->input->post('keterangan_profile'),
			'email_profile' => $this->input->post('email_profile'),
			'telp_profile' => $this->input->post('telp_profile'),
			'youtube' => $this->input->post('youtube'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
		);
		$where = array('id_profile' => $this->input->post('id_profile'));
		$this->db->update('profile',$data,$where);
		$alert = $this->Alert_model->update();
		
		$this->session->set_flashdata('alert','update');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>
