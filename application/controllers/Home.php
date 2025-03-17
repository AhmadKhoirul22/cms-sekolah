<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
	}
	public function index(){
		$this->db->from('konten a');
		$this->db->join('kategori b','b.id_kategori = a.id_kategori','left');
		$this->db->join('user c','c.id_user = a.id_user','left');
		$data['konten'] = $this->db->get()->result_array();
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();
		$data['title'] = 'Dashboard';
		$this->template->load('template','home',$data);
	}
	public function detail($lug){
		$slug = $this->uri->segment(3);
		$this->db->from('konten a')->where('a.slug',$slug);
		$this->db->join('kategori b','b.id_kategori = a.id_kategori','left');
		$this->db->join('user c','c.id_user = a.id_user','left');
		$data['konten'] = $this->db->get()->row_array();
		// $this->db->where('slug',$slug);
		$data['title'] = 'detail berita';
		$this->db->from('profile');
		$data['profile'] = $this->db->get()->row();
		$this->template->load('template','detail',$data);
		// $this->load->view('detail',$data);
	}
}
?>
