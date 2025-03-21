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
		<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal"
			data-bs-target="#default">
			Tambah Kategori
		</button>
		<!-- modal -->
		<div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true"
			style="display: none;">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1">Tambah Kategori</h5>
						<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('admin/kategori/tambah') ?>" method="post">
							<div class="mb-2">
								<label for="" class="form-label">Nama Kategori</label>
								<input type="text" name="nama_kategori" class="form-control" required>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-bs-dismiss="modal">
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
		<table class="table DataTable" id="table1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Kategori</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($kategori as $row){ ?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $row['nama_kategori'] ?></td>
					<td>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#default<?= $row['id_kategori'] ?>">
							<i class="bi bi-pencil"></i>
						</button>
						<a href="<?= base_url('admin/kategori/delete/'.$row['id_kategori']) ?>"
							class="btn btn-danger delete-button"
							data-href="<?= base_url('admin/kategori/delete/'.$row['id_kategori']) ?>"><i
								class="bi bi-trash"></i></a>
					</td>
				</tr>
				<!-- modal -->
				<div class="modal fade text-left" id="default<?= $row['id_kategori'] ?>" tabindex="-1"
					aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-dialog-scrollable" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel1">Tambah Update</h5>
								<button type="button" class="close rounded-pill" data-bs-dismiss="modal"
									aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/kategori/update') ?>" method="post">
									<input type="hidden" name="id_kategori" value="<?= $row['id_kategori'] ?>">
									<div class="mb-2">
										<label for="" class="form-label">Nama Kategori</label>
										<input type="text" name="nama_kategori" value="<?= $row['nama_kategori'] ?>"
											class="form-control" required>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn" data-bs-dismiss="modal">
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
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
