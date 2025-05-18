<div class="card">
	<div class="card-body">
		<div id="autohide">
			<!-- <?= $this->session->flashdata('alert'); ?> -->
			<?php if ($this->session->flashdata('alert') == 'warning'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Data tidak valid',
					text: 'Judul Konten sudah terdaftar.',
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
			<?php elseif ($this->session->flashdata('alert') == 'file bermasalah'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'File Tidak Valid',
					text: 'File melebihi jumlah dalam mb',
					confirmButtonText: 'OK',
					timer: 3000
				});
			</script>
			<?php endif; ?>

		</div>
		<h3 class="text-center">Konten PPDB</h3>
			<form action="<?= base_url('admin/ppdb/update') ?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="nama_foto" value="<?= $ppdb->foto ?>">
				<div class="mb-2">
					<label for="" class="form-label">Judul</label>
					<input type="text" value="<?= $ppdb->judul ?>" name="judul" readonly class="form-control">
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Tahun Ajaran</label>
					<input type="text" value="<?= $ppdb->tahun_ajaran ?>" name="tahun_ajaran" class="form-control">
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Program Pembiasaan</label>
					<textarea name="program_pembiasaan" class="textareaEdit" id="" cols="30"
						rows="10"><?= $ppdb->program_pembiasaan ?></textarea>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Persyaratan</label>
					<textarea name="persyaratan" class="textareaEdit" id="" cols="30"
						rows="10"><?= $ppdb->persyaratan ?></textarea>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Ekstrakulikuler</label>
					<textarea name="ekstrakulikuler" class="textareaEdit" id="" cols="30"
						rows="10"><?= $ppdb->ekstrakulikuler ?></textarea>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Foto</label>
					<input type="file" name="foto" class="form-control">
					<div class="mt-3">
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#default<?= $ppdb->foto ?>">
							<i class="bi bi-eye"></i> Lihat Foto
						</button>
						<div class="modal fade text-left" id="default<?= $ppdb->foto ?>" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-xl " role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel1">Foto PPDB</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close">
											<i data-feather="x"></i>
										</button>
									</div>
									<div class="modal-body">
										<img src="<?= base_url('assets/upload/konten/'.$ppdb->foto) ?>" class=""
											style="border-radius: 3%;max-width: 100%;height: auto;" alt="">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
											<i class="bx bx-x d-block d-sm-none"></i>
											<span class="d-none d-sm-block">Close</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mb-2">
					<label for="" class="form-label">Link</label>
					<input type="text" value="<?= $ppdb->link ?>" name="link" class="form-control">
				</div>
				<div class="mb-3">
					<button type="submit" class="btn btn-primary ml-1">
						<i class="bx bx-check d-block d-sm-none"></i>
						<span class="d-none d-sm-block">Update</span>
					</button>
				</div>
			</form>
	</div>
</div>
<script>

</script>
