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
							<form action="<?= base_url('admin/profile/update') ?>" method="post" >
								<input type="hidden" name="id_profile" value="<?= $profile->id_profile ?>" >
								<div class="mb-3">
								<label for="" class="form-label">Nama </label>
								<input type="text" name="nama_profile" value="<?= $profile->nama_profile ?>" class="form-control">
								</div>
								<div class="mb-3">
								<label for="" class="form-label">Alamat </label>
								<input type="text" name="alamat_profile" value="<?= $profile->alamat_profile ?>" class="form-control">
								</div>
								<div class="mb-3">
								<label for="" class="form-label">Email Profile</label>
								<input type="email" name="email_profile" value="<?= $profile->email_profile ?>" class="form-control">
								</div>
								<div class="mb-3">
								<label for="" class="form-label">No Telp</label>
								<input type="text" name="telp_profile" value="<?= $profile->telp_profile ?>" class="form-control">
								</div>
								<div class="mb-3">
								<label for="" class="form-label">Keterangan </label>
								<textarea name="keterangan_profile" class="form-control" 	><?= $profile->keterangan_profile ?></textarea>
								</div>
								<div class="mb-3">
								<button class="btn btn-info" type="submit" >Update</button>
								</div>
							</form>
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
