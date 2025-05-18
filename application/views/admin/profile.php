<div class="card">
	<div class="card-body">
		<div id="autohide">
			<!-- <?= $this->session->flashdata('alert'); ?> -->
			<?php if ($this->session->flashdata('alert') == 'warning'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Data tidak valid',
					text: 'error.',
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
		<form action="<?= base_url('admin/profile/update') ?>" method="post" enctype="multipart/form-data" >
			<input type="hidden" name="id_profile" value="<?= $profile->id_profile ?>">
			<input type="hidden" name="nama_foto" value="<?= $profile->foto ?>">
			<div class="mb-3">
				<label for="" class="form-label">Nama </label>
				<input type="text" name="nama_profile" readonly value="<?= $profile->nama_profile ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Alamat </label>
				<input type="text" name="alamat_profile" value="<?= $profile->alamat_profile ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Email</label>
				<input type="email" name="email_profile" value="<?= $profile->email_profile ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">No Telp</label>
				<input type="text" name="telp_profile" value="<?= $profile->telp_profile ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Link Youtube</label>
				<input type="text" name="youtube" value="<?= $profile->youtube ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Link Facebook</label>
				<input type="text" name="facebook" value="<?= $profile->facebook ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Link Instagram</label>
				<input type="text" name="instagram" value="<?= $profile->instagram ?>" class="form-control">
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Keterangan </label>
				<textarea name="keterangan_profile" class="form-control"><?= $profile->keterangan_profile ?></textarea>
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Foto Kepala Sekolah </label>
				<input type="file" name="foto" class="form-control">
				<div class="mt-3">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#default">
							<i class="bi bi-eye"></i> Lihat Foto
					</button>
					<div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel1" aria-hidden="true">
							<div class="modal-dialog modal-dialog-scrollable modal-xl " role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="myModalLabel1">Foto Kepala Sekolah</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal"
											aria-label="Close">
											<i data-feather="x"></i>
										</button>
									</div>
									<div class="modal-body">
										<img src="<?= base_url('assets/upload/konten/'.$profile->foto) ?>" class=""
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
			<div class="mb-3">
				<button class="btn btn-info" type="submit">Update</button>
			</div>
		</form>
	</div>
</div>
