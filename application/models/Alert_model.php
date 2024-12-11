<?php 
class Alert_model extends CI_Model{
	public function tambah(){
		return '<div class="alert alert-success alert-dismissible show fade">
                                        data berhasil ditambahkan
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
	}
	public function warning(){
		return '<div class="alert alert-danger alert-dismissible show fade">
                                        data tidak valid
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
	}
	public function delete(){
		return '<div class="alert alert-danger alert-dismissible show fade">
                                        data berhasil dihapus
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
	}
	public function update(){
		return '<div class="alert alert-success alert-dismissible show fade">
                                        data berhasil diupdate
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
	}
}
?>
