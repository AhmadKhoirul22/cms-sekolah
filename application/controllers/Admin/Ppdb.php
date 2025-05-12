<?php 
class Ppdb extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == null){
			redirect('auth');
		}
		$this->load->library('Template');
	}
	public function index(){
		$data['title'] = 'PPDB';

		$this->db->from('ppdb');
		$data['ppdb'] = $this->db->get()->row();
		
		$this->template->load('admin/template','admin/ppdb',$data);
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
		date_default_timezone_set("Asia/Jakarta");
		$tanggal = date('Y-m-d');
			$data = array(
				'program_pembiasaan' => $this->input->post('program_pembiasaan'),
				'persyaratan' => $this->input->post('persyaratan'),
				'ekstrakulikuler' => $this->input->post('ekstrakulikuler'),
				'link' => $this->input->post('link'),
				'judul' => $this->input->post('judul'),
				'tahun_ajaran' => $this->input->post('tahun_ajaran'),
			);
			$where = array(
				'foto' => $this->input->post('nama_foto')
			);
			$this->db->update('ppdb',$data, $where);
			$this->session->set_flashdata('alert','update');
			redirect($_SERVER['HTTP_REFERER']);
    }
}
?>
<!-- hosting = 700k / tahun
	 web = 1,5 jt (nego)
	 pemeliharaan web + tambah fitur2 = 40k / bulan
	 2,2 jt => total tanpa penambahan fitur
	 pemeliharaan domain 300k / bulan
-->
