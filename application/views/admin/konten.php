<!DOCTYPE html>
<html lang="en">

<head>
<?php include('layout/_css.php') ?>
</head>

<body>
    <div id="app">
       <!-- sidebar -->
		<?php include('layout/_sidebar.php') ?>
		<!-- ed sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3><?= $title ?></h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
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
							<?php endif; ?>

						</div>
						<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#default">
							Tambah Konten
						</button>
						<!-- model -->
						<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">Tambah Konten</h5>
                                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                       <form action="<?= base_url('admin/konten/tambah') ?>" method="post" enctype="multipart/form-data" >
														<div class="mb-2">
															<label for="" class="form-label">Judul</label>
															<input type="text" name="judul" required class="form-control">
														</div>
														<div class="mb-2">
															<label for="" class="form-label">Keterangan</label>
															<textarea name="keterangan" id="textarea" cols="30" rows="10" ></textarea>
														</div>
														<div class="mb-2">
															<label for="" class="form-label">Kategori</label>
															<select name="id_kategori" class="form-control" id="">
																<?php foreach($kategori as $row){ ?>
																<option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="mb-2">
															<label for="" class="form-label">Foto</label>
															<input type="file" name="foto" required class="form-control">
														</div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="submit" class="btn btn-primary ml-1">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
												</form>
                                            </div>
                                        </div>
                        </div>
						<!-- model -->
						 <table class="table-DataTable" id="table1" >
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
									<td><?= $row['keterangan'] ?></td>
									<td><?= $row['nama_kategori'] ?></td>
									<td><?= $row['tanggal'] ?></td>
									<td><?= $row['nama'] ?></td>
									<td>
										<a href="<?= base_url('assets/upload/konten/'.$row['foto']) ?>" target="_blank" class="btn btn-dark"><i class="bi bi-image"></i></a>
									</td>
									<td>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#default<?= $row['id_konten'] ?>">
										<i class="bi bi-pencil"></i>
									</button>
										<a href="<?= base_url('admin/konten/delete/'.$row['foto']) ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
									</td>
								</tr>
								<!-- model -->
								<div class="modal fade text-left" id="default<?= $row['id_konten'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
									aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="myModalLabel1">Update Konten</h5>
												<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
													<i data-feather="x"></i>
												</button>
											</div>
											<div class="modal-body">
												<form action="<?= base_url('admin/konten/update') ?>" method="post"
													enctype="multipart/form-data">
													<input type="hidden" name="nama_foto" value="<?= $row['foto'] ?>" >
													<div class="mb-2">
														<label for="" class="form-label">Judul</label>
														<input type="text" name="judul" value="<?= $row['judul'] ?>" class="form-control">
													</div>
													<div class="mb-2">
														<label for="" class="form-label">Keterangan</label>
														<textarea name="keterangan" id="dark" cols="30" rows="10"><?= $row['keterangan'] ?></textarea>
													</div>
													<div class="mb-2">
														<label for="" class="form-label">Kategori</label>
														<select name="id_kategori" class="form-control" id="">
															<?php foreach($kategori as $aa){ ?>
															<option 
															<?php if($row['id_kategori'] == $aa['id_kategori']){echo 'selected'; } ?>
															value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="mb-2">
														<label for="" class="form-label">Foto</label>
														<input type="file" name="foto" class="form-control">
													</div>

											</div>
											<div class="modal-footer">
												<button type="button" class="btn" data-bs-dismiss="modal">
													<i class="bx bx-x d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Close</span>
												</button>
												<button type="submit" class="btn btn-primary ml-1">
													<i class="bx bx-check d-block d-sm-none"></i>
													<span class="d-none d-sm-block">Accept</span>
												</button>
											</div>
											</form>
										</div>
									</div>
								</div>
								<!-- model -->
								<?php } ?>
							</tbody>
						 </table>
                        </div>
                    </div>

                </section>
            </div>
		  <?php include('layout/_footer.php') ?>
           
        </div>
    </div>
<?php include('layout/_js.php') ?>
</body>

</html>
