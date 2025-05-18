<div class="card">
	<div class="card-body">
		<div id="autohide">
			<!-- <?= $this->session->flashdata('alert'); ?> -->
			<?php if ($this->session->flashdata('alert') == 'warning'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Data tidak valid',
					text: 'Nama kategori sudah terdaftar.',
					confirmButtonText: 'OK',
					timer: 3000
				});
			</script>
			<?php elseif ($this->session->flashdata('alert') == 'add'): ?>
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Berhasil',
					text: 'Data berhasil ditambahkan!',
					confirmButtonText: 'OK',
					timer: 3000
				});
			</script>
			<?php elseif ($this->session->flashdata('alert') == 'delete'): ?>
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Berhasil',
					text: 'Data berhasil dihapus!',
					confirmButtonText: 'OK',
					timer: 3000
				});
			</script>
			<?php elseif ($this->session->flashdata('alert') == 'update'): ?>
			<script>
				Swal.fire({
					icon: 'success',
					title: 'Berhasil',
					text: 'Data berhasil diupdate!',
					confirmButtonText: 'OK',
					timer: 3000
				});
			</script>
			<?php endif; ?>

		</div>
		<button type="button" class="btn btn-primary block mb-3" data-bs-toggle="modal" data-bs-target="#default">
			Tambah Kategori
		</button>
		<!-- modal -->
		<div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
			aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1">Tambah Kategori</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form id="formTambahKategori" method="post">
							<div class="mb-2">
								<label for="" class="form-label">Nama Kategori</label>
								<input type="text" name="nama_kategori" class="form-control" required>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							<i class="bx bx-x d-block d-sm-none"></i>
							<span class="d-none d-sm-block">Close</span>
						</button>
						<button type="submit" class="btn btn-primary ml-1">
							<i class="bx bx-check d-block d-sm-none"></i>
							<span class="d-none d-sm-block">Submit</span>
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- end modal -->
		<table class="table table-striped table-bordered" width="100%" id="datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th>Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<!-- modal -->
<div class="modal fade text-left" id="modalEdit" tabindex="-1" aria-labelledby="myModalLabel1"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel1">Update Kategori</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<form id="formEditKategori" method="post">
					<input type="hidden" name="id_kategori" id="id_kategori" value="">
					<div class="mb-2">
						<label for="" class="form-label">Nama Kategori</label>
						<input type="text" name="nama_kategori" id="nama_kategori"
							class="form-control" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
					<i class="bx bx-x d-block d-sm-none"></i>
					<span class="d-none d-sm-block">Close</span>
				</button>
				<button type="submit" class="btn btn-primary ml-1">
					<i class="bx bx-check d-block d-sm-none"></i>
					<span class="d-none d-sm-block">Submit</span>
				</button>
			</div>
			</form>
		</div>
	</div>
</div>
<!-- end modal -->
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "scrollX": true,
            "ajax": {
                "url": "<?= base_url('admin/kategori/getKategori') ?>",
                "dataSrc": ""
            },
            "columns": [
                {
                    "render": function (data, type, full, meta) {
                        return meta.row + 1; // Menampilkan nomor urut
                    }
                },
                { "data": "nama_kategori" },
                {
                    "render": function (data, type, full, meta) {
                        return `
                            
                                <button type="button" id="${full.id_kategori}" class="btn btn-primary" onclick="fun_edit(this.id)" title="Edit Kategori">
                                    <i class="bi-pencil"></i>
                                </button>
                                <button type="button" id="${full.id_kategori}" class="btn btn-danger" onclick="fun_delete(this.id)" title="Hapus Kategori">
                                    <i class="bi-trash"></i>
                                </button>
                            
                        `;
                    }
                }
            ]
        });
    });
	function fun_edit(id_kategori) {
		$('#modalEdit').modal('show');
		$.getJSON('<?= base_url('admin/kategori/getKategoriID/') ?>'+id_kategori, function(json){
			$('#nama_kategori').val(json.nama_kategori);
			$('#id_kategori').val(json.id_kategori);
		})
	}

	function fun_delete(id_kategori) {
		var result = confirm("Yakin Hapus Kategori?");
		if (result) {
			$.ajax({
				url: "<?= base_url('admin/kategori/delete/') ?>" + id_kategori,
				dataType: "json",
				type: "POST",
				success: function (response) {
					if (response.status === 'error') {
                Swal.fire({
                    icon: 'error',
                    title: 'Data tidak valid',
                    text: response.message,
                    confirmButtonText: 'OK',
                    timer: 3000
                });
            } else if (response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: response.message,
                    confirmButtonText: 'OK',
                    timer: 3000
                }).then(() => {
                    $('#datatable').DataTable().ajax.reload(); 
                });
            }
				},
				error: function () {
					Swal.fire({
								icon: 'error',
								title: 'Gagal!',
								text: 'Terjadi kesalahan dalam update data.',
								confirmButtonText: 'OK'
							});
				}
			});
		}
	}

	$('#formEditKategori').submit(function (e) {
    e.preventDefault();
    let formData = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "<?= base_url('admin/kategori/update') ?>",
        data: formData,
        dataType: "json",
        success: function (response) {
            if (response.status === 'error') {
                Swal.fire({
                    icon: 'error',
                    title: 'Data tidak valid',
                    text: response.message,
                    confirmButtonText: 'OK',
                    timer: 3000
                });
            } else if (response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: response.message,
                    confirmButtonText: 'OK',
                    timer: 3000
                }).then(() => {
                    $('#modalEdit').modal('hide');
                    $('#datatable').DataTable().ajax.reload(); 
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Terjadi kesalahan dalam update data.',
                confirmButtonText: 'OK'
            });
        }
    });
});

		// Menangani submit form tambah kategori
		$('#formTambahKategori').submit(function(e) {
			e.preventDefault();
			let formData = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "<?= base_url('admin/kategori/tambah') ?>",
				dataType: "json",
				data: formData,
				success: function(response) {
					if (response.status === 'error') {
						Swal.fire({
							icon: 'error',
							title: 'Data tidak valid',
							text: response.message,
							confirmButtonText: 'OK',
							timer: 3000
						});
					} else if (response.status === 'success') {
						Swal.fire({
							icon: 'success',
							title: 'Berhasil',
							text: response.message,
							confirmButtonText: 'OK',
							timer: 3000
						}).then(() => {
							$('#default').modal('hide');
							$('#datatable').DataTable().ajax.reload();
						});
            		}
				},
				error: function() {
					Swal.fire({
						icon: 'error',
						title: 'Gagal!',
						text: 'Terjadi kesalahan dalam update data.',
						confirmButtonText: 'OK'
					});
				}
			});
		});
</script>
