<?php 
class Konten extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == NULL){
			redirect('auth');
		}
		$this->load->model('Alert_model');
		$this->load->model('Kategori_model');
		$this->load->model('Konten_model');
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'Konten';
		$data['konten'] = $this->Konten_model->tampil_konten();
		$data['kategori'] = $this->Kategori_model->tampil();
		$this->template->load('admin/template','admin/konten',$data);
	}
	public function tambah(){
		// foto
		$namafoto = date('YmdHis').'.jpg';
		$config['upload_path']          = 'assets/upload/konten/';
		$config['max_size'] = 102400; //3 * 1024 * 1024; //3Mb; 0=unlimited
		$config['allowed_types']        = '*';
		$config['file_name']            = $namafoto;

		$this->load->library('upload', $config);
		
		if($_FILES['foto']['size'] >= 100 * 1024 * 1024){
			$this->session->set_flashdata('alert', 'file bermasalah');
			redirect('admin/konten');  
		}  elseif( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		} 
		// foto
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date('Y-m-d');
		$this->db->from('konten')->where('judul',$this->input->post('judul'));
		$cek = $this->db->get()->row();
		if($cek != null){
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else{
			$data = $this->Konten_model->add($tanggal,$namafoto);
			$this->db->insert('konten',$data);
			$this->session->set_flashdata('alert','add');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function delete($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
        if(file_exists($filename)){
            unlink("./assets/upload/konten/".$id);
        }
        $where = $this->Konten_model->delete($id);
        $this->db->delete('konten', $where);
		$this->session->set_flashdata('alert','delete');
		redirect($_SERVER['HTTP_REFERER']);
    }
	public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 102400; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';  
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 102400){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date('Y-m-d');
		$this->db->from('konten')->where('judul',$this->input->post('judul'));
		$cek = $this->db->get()->row();
		if($cek != null){
			$alert = $this->Alert_model->warning();
			$this->session->set_flashdata('alert','warning');
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'id_kategori' => $this->input->post('id_kategori'),
				'keterangan' => $this->input->post('keterangan'),
				'slug' => str_replace(' ','-',$this->input->post('judul')),
			);
			$where = array(
				'foto' => $this->input->post('nama_foto')
			);
			$this->db->update('konten',$data, $where);
			$this->session->set_flashdata('alert','update');
			redirect($_SERVER['HTTP_REFERER']);
		}
    }
}
?>
