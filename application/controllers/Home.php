<?php
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->model('Konten_model');
		$this->load->model('Kategori_model');
	}
	public function index(){
		$this->load->library('pagination');

		// // Konfigurasi pagination
		// $config['base_url'] = base_url('home/index'); // Ganti 'home' jika nama controllermu beda
		// $config['total_rows'] = $this->Konten_model->get_total_konten();
		// $config['per_page'] = 6;
		// $config['uri_segment'] = 3;

		// // Style pagination (opsional, biar Bootstrap)
		// $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		// $config['full_tag_close'] = '</ul>';
		// $config['first_link'] = 'First';
		// $config['last_link'] = 'Last';
		// $config['next_link'] = '&raquo;';
		// $config['prev_link'] = '&laquo;';
		// $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		// $config['cur_tag_close'] = '</a></li>';
		// $config['num_tag_open'] = '<li class="page-item">';
		// $config['num_tag_close'] = '</li>';
		// $config['attributes'] = ['class' => 'page-link'];

		// $this->pagination->initialize($config);

		// $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		// $data['konten'] = $this->Konten_model->get_konten_paginate($config['per_page'], $page);
		// $data['pagination'] = $this->pagination->create_links();
		$data['konten'] = $this->Konten_model->konten_six();
		$data['profile'] = $this->Kategori_model->tampil_profile();
		$data['title'] = 'Dashboard';

		// $this->load->view('home', $data);
		$this->template->load('template','home',$data);
	}

	public function detail($slug){
		$slug = $this->uri->segment(3);
		$data['konten'] = $this->Konten_model->konten_bySlug($slug);
		$data['title'] = 'detail berita';
		$data['profile'] = $this->Kategori_model->tampil_profile();
		// $this->load->view('detail',$data);
		$this->template->load('template_detail','detail',$data);
	}
}
?>
