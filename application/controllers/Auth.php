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
			$alert = '<div class="alert alert-danger alert-dismissible show fade">
                                        email tidak terdaftar
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
			$this->session->set_flashdata('alert','email tidak terdaftar');
			redirect($_SERVER['HTTP_REFERER']);
		} else if ($cek->password == $password){
			$data = array(
				'nama' => $cek->nama,
				'password' => $cek->password,
				'email' => $cek->email,
				'id_user' => $cek->id_user,
				'level' => $cek->level,
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		} else {
			$alert = '<div class="alert alert-danger alert-dismissible show fade">
                                        password salah
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
			$this->session->set_flashdata('alert','password salah');
			  redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
?>
