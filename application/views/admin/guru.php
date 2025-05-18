<div class="card">
	<div class="card-body">
		<div id="autohide">
			<!-- <?= $this->session->flashdata('alert'); ?> -->
			<?php if ($this->session->flashdata('alert') == 'warning'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Data tidak valid',
					text: 'Nama guru sudah terdaftar.',
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
		<button type="button" class="btn btn-primary block mb-3" data-bs-toggle="modal"
			data-bs-target="#default">
			Tambah Guru
		</button>
		<!-- modal -->
		<div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true"
			style="display: none;">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1">Tambah Guru</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('admin/guru/tambah') ?>" method="post">
							<div class="mb-2">
								<label for="" class="form-label">Nama Guru</label>
								<input type="text" name="nama" class="form-control" required>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Kompetensi</label>
								<input type="text" name="kompetensi" class="form-control" required>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Mata Pelajaran</label>
								<input type="text" name="mata_pelajaran" class="form-control" required>
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
		<table class="table table-bordered table-striped" width="100%" id="datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Kompetensi</th>
					<th>Mata Pelajaran</th>
					<th>Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<!-- modal -->
<div class="modal fade text-left" id="EditGuru" tabindex="-1" aria-labelledby="myModalLabel1"
	aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalLabel1">Update Guru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i data-feather="x"></i>
				</button>
			</div>
			<div class="modal-body">
				<form id="FormEdit" method="post">
					<input type="hidden" name="id_guru" id="id_guru" >
					<div class="mb-2">
						<label for="" class="form-label">Nama Guru</label>
						<input type="text" name="nama" id="nama" class="form-control" required>
					</div>
					<div class="mb-2">
						<label for="" class="form-label">Kompetensi</label>
						<input type="text" name="kompetensi" id="kompetensi" class="form-control"
							required>
					</div>
					<div class="mb-2">
						<label for="" class="form-label">Mata Pelajaran</label>
						<input type="text" name="mata_pelajaran" id="mata_pelajaran"
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
<!-- jquery -->
<script>
	$(document).ready(function() {
		$('#datatable').DataTable({
			"scrollX": true,
			"ajax": {
				"url": "<?= base_url('admin/guru/getGuruAll') ?>",
				"dataSrc": ""
			},
			"columns": [
				{
                    "render": function (data, type, full, meta) {
                        return meta.row + 1; // Menampilkan nomor urut
                    }
                },
				{"data": "nama"},
				{"data": "kompetensi"},
				{"data": "mata_pelajaran"},
				{
    "data": "id_guru",
    "render": function (data, type, full, meta) {
        return `
            <button type="button" id="${data}" class="btn btn-primary" onclick="fun_edit(this.id)" title="Edit User">
                <i class="bi-pencil"></i>
            </button>
            <button type="button" id="${data}" class="btn btn-danger" onclick="fun_delete(this.id)" title="Hapus User">
                <i class="bi-trash"></i>
            </button>
        `;
    }
}

			]
		});
	});
	function fun_edit(id_guru) {
		$('#EditGuru').modal('show');
		$.getJSON('<?= base_url('admin/guru/getGuruID/') ?>' + id_guru, function(json) {
			$('#kompetensi').val(json.kompetensi);
			$('#mata_pelajaran').val(json.mata_pelajaran);
			$('#nama').val(json.nama);
			$('#id_guru').val(json.id_guru);
		});
	}

	$('#FormEdit').submit(function (e) {
			e.preventDefault();
			let formData = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "<?= base_url('admin/guru/update') ?>",
				dataType: "json",
				data: formData,
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
							$('#EditGuru').modal('hide');
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

		function fun_delete(id_guru){
		var result = confirm("Apakah anda yakin menghapus data user ini?");
		if(result){
			$.ajax({
				url: "<?= base_url('admin/guru/delete/') ?>" + id_guru,
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
</script>
