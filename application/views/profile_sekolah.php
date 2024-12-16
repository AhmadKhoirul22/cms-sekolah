<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('layout/_css.php') ?>
</head>

<body>
	<!-- Navbar & Hero Start -->
	<div class="container-fluid position-relative p-0">
		<?php include('layout/_navbar.php') ?>
		<!-- Carousel Start -->
		<?php include('layout/_carousel.php') ?>
		<!-- Carousel End -->
	</div>
	
	<div class="container-fluid service pb-5 mt-5">
		<div class="container pb-5">
			<div class="col-12">
				<h4 class="text-center mb-5 mt-5"><?= $title ?></h4>
				<div class="row">
					<div class="col-8">
						<form>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="SMP PENDA MOJOGEDANG">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">NPSN</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="20312046">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">Status</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="Swasta">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">Bentuk Pendidikan</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="SMP">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">Status Kepemilikan</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="Yayasan">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">SK pendirian</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="426, 1967-01-01">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">SK izin operasional</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name"
										value="421.3/639, 1967-01-01">
								</div>
							</div>
							<div class="row mb-3">
								<label class="col-sm-2 col-form-label" for="basic-default-name">Akreditasi</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control" id="basic-default-name" value="A">
								</div>
							</div>
						</form>
					</div>
					<div class="col-4"></div>
				</div>
				<!-- penutup row -->
				 <h1 class="text-center mb-3 mt-3" >Visi dan Misi</h1>
				 <div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h5>Visi</h5>
								<p></p>
								<h5>Misi</h5>
								<p></p>
							</div>
						</div>
					</div>
				 </div>
				 <h1 class="text-center mb-3 mt-3" >Daftar Tenaga Pengajar</h1>
				 <div class="row">
				 <?php foreach($guru as $gg){?>
					<div class="col-4">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-3">
									<h1><i class="fas fa-user fa-2x"></i></h1>
									</div>
									<div class="col-9">
									<h6>Nama : <?= $gg['nama'] ?></h6>
									<p>Kompetensi : <?= $gg['kompetensi'] ?> </p>
									<p>Mata Pelajaran : <?= $gg['mata_pelajaran'] ?> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				 </div>
				 <!-- penutup row -->
			</div>
		</div>
	</div>
	<!-- Services End -->

	<!-- Footer Start -->
	<?php include('layout/_footer.php') ?>
	<!-- Footer End -->

	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


	<!-- JavaScript Libraries -->
	<?php include('layout/_js.php') ?>
</body>

</html>
