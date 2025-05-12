<?php 
class Profile extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Alert_model');
		$this->load->library('Template');
		$this->load->model('Kategori_model');
	}
	public function index(){
		$data['title'] = 'Profile';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		$this->template->load('admin/template','admin/profile',$data);
	}
	public function update(){
		 $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 2048;
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';  
        $this->load->library('upload', $config);
        // Maksimum 2MB = 2 * 1024 * 1024 = 2097152 byte
		if ($_FILES['foto']['size'] >= 2097152) {
			$this->session->set_flashdata('alert', '
				<div class="alert alert-danger alert-dismissible" role="alert">
				Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 2 MB.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			');
			redirect($_SERVER['HTTP_REFERER']); // Tambahkan ini agar langsung kembali
		} elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }

		$data = array(
			'nama_profile' => $this->input->post('nama_profile'),
			'alamat_profile' => $this->input->post('alamat_profile'),
			'keterangan_profile' => $this->input->post('keterangan_profile'),
			'email_profile' => $this->input->post('email_profile'),
			'telp_profile' => $this->input->post('telp_profile'),
			'youtube' => $this->input->post('youtube'),
			'facebook' => $this->input->post('facebook'),
			'instagram' => $this->input->post('instagram'),
			'id_profile' => $this->input->post('id_profile')
		);
		$where = array(
				'foto' => $this->input->post('nama_foto')
		);
		$this->db->update('profile',$data,$where);
		$alert = $this->Alert_model->update();
		$this->session->set_flashdata('alert','update');
		redirect($_SERVER['HTTP_REFERER']);
	}
}
?>
