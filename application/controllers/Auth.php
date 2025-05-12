<?php
class Auth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
	}

	public function index(){
		$data['title'] = 'Login Admin';
		$this->load->view('login',$data);
	}
	public function login(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->db->from('user')->where('email',$this->input->post('email'));
		$cek = $this->db->get()->row();
		if($cek == NULL){
			echo json_encode(['status' => 'error', 'message' => 'Email Terdaftar!']);
		} else if ($cek->password == $password){
			$data = array(
				'nama' => $cek->nama,
				'password' => $cek->password,
				'email' => $cek->email,
				'id_user' => $cek->id_user,
				'level' => $cek->level,
			);
			$this->session->set_userdata($data);
			echo json_encode(['status' => 'success', 'message' => 'Berhasil Login!','redirect' => base_url('admin/dashboard')]);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Password Salah!']);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
?>
