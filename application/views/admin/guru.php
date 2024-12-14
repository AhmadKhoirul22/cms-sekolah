<!DOCTYPE html>
<html lang="en">

<head>
<?php include('layout/_css.php') ?>
<!-- Tambahkan SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
									text: 'Nama guru sudah terdaftar.',
									confirmButtonText: 'OK',
									timer: 3000
								});
							</script>
							<?php elseif ($this->session->flashdata('alert') == 'success'): ?>
							<script>
								Swal.fire({
									icon: 'success',
									title: 'Berhasil',
									text: 'Data berhasil ditambahkan!',
									confirmButtonText: 'OK',
									timer: 3000
								});
							</script>
							<?php elseif ($this->session->flashdata('alert') == 'success delete'): ?>
							<script>
								Swal.fire({
									icon: 'success',
									title: 'Berhasil',
									text: 'Data berhasil dihapus!',
									confirmButtonText: 'OK',
									timer: 3000
								});
							</script>
							<?php endif; ?>

						</div>
						<button type="button" class="btn btn-outline-primary block mb-3" data-bs-toggle="modal" data-bs-target="#default">
							Tambah Guru
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
										<form action="<?= base_url('admin/guru/tambah') ?>" method="post" >
											<div class="mb-2">
												<label for="" class="form-label">Nama Guru</label>
												<input type="text" name="nama" class="form-control" required >
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
						  <table class="table DataTable" id="table1" >
							<thead>
								<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kompetensi</th>
								<th>Mata Pelajaran</th>
								<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($guru as $row){ ?>
								<tr>
									<td><?= $no++; ?></td>
									<td><?= $row['nama'] ?></td>
									<td><?= $row['kompetensi'] ?></td>
									<td><?= $row['mata_pelajaran'] ?></td>
									<td>
									
									<button type="button" class="btn btn-primary" data-bs-toggle="modal"
										data-bs-target="#default<?= $row['id_guru'] ?>">
										<i class="bi bi-pencil"></i>
									</button>
										<a href="<?= base_url('admin/guru/delete/'.$row['id_guru']) ?>" 
										class="btn btn-danger delete-button" 
										data-href="<?= base_url('admin/guru/delete/'.$row['id_guru']) ?>"
										><i class="bi bi-trash"></i></a>
										
									</td>
								</tr>
											<!-- modal -->
											<div class="modal fade text-left" id="default<?= $row['id_guru'] ?>" tabindex="-1"
										aria-labelledby="myModalLabel1" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-dialog-scrollable" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="myModalLabel1">Update User</h5>
													<button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
														<i data-feather="x"></i>
													</button>
												</div>
												<div class="modal-body">
													<form action="<?= base_url('admin/user/update') ?>" method="post">
														<input type="hidden" name="id_guru" value="<?= $row['id_guru'] ?>" >
														<div class="mb-2">
															<label for="" class="form-label">Email</label>
															<input type="email" name="email" value="<?= $row['nama'] ?>" class="form-control" required>
														</div>
														<div class="mb-2">
															<label for="" class="form-label">Nama</label>
															<input type="text" name="nama" value="<?= $row['kompetensi'] ?>" class="form-control" required>
														</div>
														<div class="mb-2">
															<label for="" class="form-label">Nama</label>
															<input type="text" name="nama" value="<?= $row['mata_pelajaran'] ?>" class="form-control" required>
														</div>
														<!-- <div class="mb-2">
															<label for="" class="form-label">Password</label>
															<input type="password" value="<?= $row['password'] ?>" name="password" class="form-control" required>
														</div> -->
														
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

                </section>
            </div>
		  <?php include('layout/_footer.php') ?>
           
        </div>
    </div>
<?php include('layout/_js.php') ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Pilih semua tombol dengan class "delete-button"
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah tautan langsung dijalankan
                const href = this.getAttribute('data-href'); // Ambil URL dari atribut data-href

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect ke URL jika dikonfirmasi
                        window.location.href = href;
                    }
                });
            });
        });
    });
</script>

</body>

</html>
	
