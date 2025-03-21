<div class="card">
	<div class="card-body">
		<div id="autohide">
			<!-- <?= $this->session->flashdata('alert'); ?> -->
			<?php if ($this->session->flashdata('alert') == 'warning'): ?>
			<script>
				Swal.fire({
					icon: 'error',
					title: 'Data tidak valid',
					text: 'Nama user sudah terdaftar.',
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
			Tambah User
		</button>
		<!-- modal -->
		<div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true"
			style="display: none;">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="myModalLabel1">Tambah User</h5>
						<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
							<i data-feather="x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?= base_url('admin/user/tambah') ?>" method="post">
							<div class="mb-2">
								<label for="" class="form-label">Email</label>
								<input type="email" name="email" class="form-control" required>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Nama</label>
								<input type="text" name="nama" class="form-control" required>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Password</label>
								<input type="password" name="password" class="form-control" required>
							</div>
							<div class="mb-2">
								<label for="" class="form-label">Level</label>
								<select name="level" class="form-control" id="">
									<option value="ADMIN">ADMIN</option>
									<option value="KONTRIBUTOR">KONTRIBUTOR</option>
								</select>
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
		<table class="table DataTable" id="table1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach($user as $row){ ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['email'] ?></td>
					<td><?= $row['level'] ?></td>
					<td>
						<?php if($this->session->userdata('id_user') != $row['id_user']){ ?>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#default<?= $row['id_user'] ?>">
							<i class="bi bi-pencil"></i>
						</button>
						<a onclick="return confirm('yakin dihapus?')"
							href="<?= base_url('admin/user/delete/'.$row['id_user']) ?>" class="btn btn-danger"><i
								class="bi bi-trash"></i></a>
						<?php } ?>
					</td>
				</tr>
				<!-- modal -->
				<div class="modal fade text-left" id="default<?= $row['id_user'] ?>" tabindex="-1"
					aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;">
					<div class="modal-dialog modal-dialog-scrollable" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="myModalLabel1">Update User</h5>
								<button type="button" class="close rounded-pill" data-bs-dismiss="modal"
									aria-label="Close">
									<i data-feather="x"></i>
								</button>
							</div>
							<div class="modal-body">
								<form action="<?= base_url('admin/user/update') ?>" method="post">
									<input type="hidden" name="id_user" value="<?= $row['id_user'] ?>">
									<div class="mb-2">
										<label for="" class="form-label">Email</label>
										<input type="email" name="email" value="<?= $row['email'] ?>"
											class="form-control" required>
									</div>
									<div class="mb-2">
										<label for="" class="form-label">Nama</label>
										<input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control"
											required>
									</div>
									<!-- <div class="mb-2">
				<label for="" class="form-label">Password</label>
				<input type="password" value="<?= $row['password'] ?>" name="password" class="form-control" required>
			</div> -->
									<div class="mb-2">
										<label for="" class="form-label">Level</label>
										<select name="level" class="form-control" id="">
											<option value="ADMIN"
												<?php if($row['level'] == 'ADMIN'){echo 'selected';} ?>>ADMIN</option>
											<option value="KONTRIBUTOR"
												<?php if($row['level'] == 'KONTRIBUTOR'){echo 'selected';} ?>>
												KONTRIBUTOR</option>
										</select>
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
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
