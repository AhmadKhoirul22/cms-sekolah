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
		<button type="button" class="btn btn-primary block mb-3" data-bs-toggle="modal" data-bs-target="#default">
			Tambah Konten
		</button>
		<!-- model -->
		<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
			aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable modal-full " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1">Tambah Konten</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('admin/konten/tambah') ?>" method="post"
							enctype="multipart/form-data">
							<div class="mb-2">
								<label for="" class="form-label">Judul</label>
								<input type="text" name="judul" required class="form-control">
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Keterangan</label>
								<textarea name="keterangan" id="textarea" cols="30" rows="10"></textarea>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Kategori</label>
								<select name="id_kategori" class="form-select" id="">
									<?php foreach($kategori as $row){ ?>
									<option value="<?= $row['id_kategori'] ?>">
										<?= $row['nama_kategori'] ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Foto</label>
								<input type="file" name="foto" required class="form-control">
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
							<i class="bx bx-x d-block d-sm-none"></i>
							<span class="d-none d-sm-block">Close</span>
						</button>
						<button type="submit" class="btn btn-primary ml-1">
							<i class="bx bx-check d-block d-sm-none"></i>
							<span class="d-none d-sm-block">Save</span>
						</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- model -->
		<table class="table-DataTable" id="table1">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Keterangan</th>
					<th>Kategori</th>
					<th>Tanggal</th>
					<th>User</th>
					<th>Foto</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($konten as $row){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $row['judul'] ?></td>
					<td><a href="" data-bs-toggle="modal" data-bs-target="#ket<?= $row['id_konten'] ?>"
							class="btn btn-success"><i class="bi bi-eye"></i></a></td>
					<td><?= $row['nama_kategori'] ?></td>
					<td><?= $row['tanggal'] ?></td>
					<td><?= $row['nama'] ?></td>
					<td>
						<!-- <a href="<?= base_url('assets/upload/konten/'.$row['foto']) ?>"
						target="_blank" class="btn btn-dark"><i class="bi bi-image"></i></a> -->
						<a href="" data-bs-toggle="modal" data-bs-target="#img<?= $row['id_konten'] ?>"
							class="btn btn-dark"><i class="bi bi-image"></i></a>
					</td>
					<td>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#default<?= $row['id_konten'] ?>">
							<i class="bi bi-pencil"></i>
						</button>
						<a href="<?= base_url('admin/konten/delete/'.$row['foto']) ?>"
							data-href="<?= base_url('admin/konten/delete/'.$row['foto']) ?>"
							class="btn btn-danger delete-button"><i class="bi bi-trash"></i></a>
					</td>
				</tr>
				<!-- model edit konten -->
				<div class="modal fade text-left" id="default<?= $row['id_konten'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel1" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel1">Update Konten</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/konten/update') ?>" method="post"
									enctype="multipart/form-data">
									<input type="hidden" name="nama_foto" value="<?= $row['foto'] ?>">
									<div class="mb-2">
										<label for="" class="form-label">Judul</label>
										<input type="text" name="judul" value="<?= $row['judul'] ?>"
											class="form-control">
									</div>
									<div class="mb-2">
										<label for="" class="form-label">Keterangan</label>
										<textarea name="keterangan" class="textareaEdit" id="" cols="30"
											rows="10"><?= $row['keterangan'] ?></textarea>
									</div>
									<div class="mb-2">
										<label for="" class="form-label">Kategori</label>
										<select name="id_kategori" class="form-select" id="">
											<?php foreach($kategori as $aa){ ?>
											<option
												<?php if($row['id_kategori'] == $aa['id_kategori']){echo 'selected'; } ?>
												value="<?= $aa['id_kategori'] ?>">
												<?= $aa['nama_kategori'] ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="mb-2">
										<label for="" class="form-label">Foto</label>
										<input type="file" name="foto" class="form-control">
									</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
									<i class="bx bx-x d-block d-sm-none"></i>
									<span class="d-none d-sm-block">Close</span>
								</button>
								<button type="submit" class="btn btn-primary ml-1">
									<i class="bx bx-check d-block d-sm-none"></i>
									<span class="d-none d-sm-block">Save</span>
								</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<!-- end model edit konten -->
				<!-- modal keterangan -->
				<div class="modal fade text-left" id="ket<?= $row['id_konten'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel1" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel1">Konten</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<div class="modal-body">
								<div class="container">
									<p><?= $row['keterangan'] ?></p>
								</div>
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
				<!-- end modal keterangan -->
				<!-- modal image -->
				<div class="modal fade text-left" id="img<?= $row['id_konten'] ?>" tabindex="-1" role="dialog"
					aria-labelledby="myModalLabel1" aria-hidden="true">
					<div class="modal-dialog modal-dialog-scrollable modal-xl " role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel1">Konten</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<div class="modal-body">
								<div class="container">
									<img src="<?= base_url('assets/upload/konten/'.$row['foto']) ?>"
										class="card-img-top img-fluid" alt="">
								</div>
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
				<!-- end modal image -->
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script>

</script>
