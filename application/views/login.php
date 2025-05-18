<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/mazer/dist/') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/mazer/dist/') ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/mazer/dist/') ?>assets/css/app.css">
    <link rel="stylesheet" href="<?= base_url('assets/mazer/dist/') ?>assets/css/pages/auth.css">
	<!-- Tambahkan SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- jQuery (wajib untuk DataTables) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- DataTables CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<!-- DataTables JS -->
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="<?= base_url('auth') ?>"><img src="<?= base_url('assets/mazer/dist/') ?>assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    <!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->
					<div id="autohide">
							<?php if ($this->session->flashdata('alert') == 'email tidak terdaftar'): ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Data tidak valid',
									text: 'Email tidak terdaftar.',
									confirmButtonText: 'OK',
									timer: 3000
								});
							</script>
							<?php elseif ($this->session->flashdata('alert') == 'password salah'): ?>
							<script>
								Swal.fire({
									icon: 'error',
									title: 'Data tidak valid',
									text: 'Password salah.',
									confirmButtonText: 'OK',
									timer: 3000
								});
							</script>
							<?php endif; ?>
						</div>
                    <form id="FormLogin" method="post" >
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" class="form-control form-control-xl" placeholder="Email" required >
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password" required >
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                </div>
            </div>
        </div>
    </div>
<script>
	$('#FormLogin').submit(function(e) {
			e.preventDefault();
			let formData = $(this).serialize();
			$.ajax({
				type: "POST",
				url: "<?= base_url('auth/login') ?>",
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
							window.location.href = response.redirect;
							// $('#default').modal('hide');
							// $('#datatable').DataTable().ajax.reload();
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
</body>
</html>
