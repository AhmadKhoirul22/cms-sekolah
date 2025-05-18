<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('layout/_css.php') ?>
	<style>
		.service-img {
			height: 200px;
			/* Atur tinggi yang sama untuk semua gambar */
			overflow: hidden;
			position: relative;
		}

		.service-img img {
			height: 100%;
			width: 100%;
			object-fit: cover;
			/* Memastikan gambar tetap rapi */
			object-position: center;
			/* Gambar tetap di tengah */
		}
	</style>
</head>

<body>
	<!-- Navbar & Hero Start -->
	<div class="container-fluid position-relative p-0">
		<?php include('layout/_navbar.php') ?>
		<!-- Carousel Start -->
		<?php include('layout/_header_start.php') ?>
		<!-- Carousel End -->
	</div>
	<!-- Navbar & Hero End -->

	<!-- Services Start -->
	<div class="container-fluid service pb-5 mt-5">
		<div class="container pb-5">
			<div class="col-xl-6 mb-3">
				<form action="<?= base_url('artikel/cari_konten') ?>" method="get" id="searchForm" class="w-100">
					<div class="input-group w-75 mx-auto">
						<input type="search" class="form-control p-3" name="keyword" id="searchInput"
							placeholder="Cari konten di sini..." aria-label="Search" value="<?= $keyword ?>">
						<button type="submit" class="btn btn-primary px-4" id="searchButton">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</form>
				<script>
					document.addEventListener("DOMContentLoaded", function () {
						var searchInput = document.getElementById("searchInput");
						var searchButton = document.getElementById("searchButton");

						searchInput.addEventListener("keyup", function (event) {
							if (event.key === "Enter") {
								// Tombol "Enter" ditekan, kirimkan formulir
								document.getElementById("searchForm").submit();
							}
						});

						searchButton.addEventListener("click", function () {
							// Klik tombol "cari", kirimkan formulir
							document.getElementById("searchForm").submit();
						});
					});
				</script>
			</div>
			<!-- <pre><?= print_r($konten); ?></pre> -->
			<?php if(empty($konten)): ?>
			<h4 class="bold text-center">Konten Tidak Ditemukan</h4>
			<?php else : ?>
			<div class="row g-4">
				<?php foreach($konten as $row): ?>
				 <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item">
						<div class="service-img">
							<img src="<?= base_url('assets/upload/konten/' . $row->foto) ?>" class="card-img-top" alt="<?= htmlentities($row->judul) ?>">
						</div>
                        <div class="rounded-bottom p-4">
							<a href="<?= base_url('home/detail/'.$row->slug) ?>"
								class="h4 d-inline-block mb-4"><?= substr($row->judul,0,20).(strlen($row->judul) > 20 ? '...' : '' ) ?></a>
							<div class="row">
								<div class="col-8">
									<p><?= tanggal_indo($row->tanggal,true) ?></p>
								</div>
								<div class="col-4">
									<div class="float-end">
										<p><?= $row->nama_kategori ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="row">
										<div class="col-sm-2"><i class="fas fa-user"></i></div>
										<div class="col-sm-10">
											<p><?= $row->nama ?></p>
										</div>
									</div>
								</div>
								<div class="col-6">
									<a class="btn btn-primary float-end rounded-pill"
										href="<?= base_url('home/detail/'.$row->slug) ?>">Selengkapnya</a>
								</div>
							</div>
						</div>
                        <!-- <div class="card-footer text-end">
                            <a href="<?= base_url('home/detail/' . $row->slug) ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div> -->
                    </div>
                </div>
				<!-- <div class="col-md-6 col-lg-4">
					<div class="service-item">
						<div class="service-img">
							<img src="<?= base_url('assets/upload/konten/'.$row->foto) ?>"
								class="img-fluid rounded-top w-100" alt="Image">
						</div>
						<div class="rounded-bottom p-4">
							<a href="<?= base_url('home/detail/'.$row->slug) ?>"
								class="h4 d-inline-block mb-4"><?= substr($row->judul,0,20).(strlen($row->judul) > 20 ? '...' : '' ) ?></a>
							<div class="row">
								<div class="col-8">
									<p><?= tanggal_indo($row->tanggal,true) ?></p>
								</div>
								<div class="col-4">
									<div class="float-end">
										<p><?= $row->nama_kategori ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="row">
										<div class="col-sm-2"><i class="fas fa-user"></i></div>
										<div class="col-sm-10">
											<p><?= $row->nama ?></p>
										</div>
									</div>
								</div>
								<div class="col-6">
									<a class="btn btn-primary float-end rounded-pill"
										href="<?= base_url('home/detail/'.$row->slug) ?>">Selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- Services End -->

	<!-- Footetart -->
	<?php include('layout/_footer.php') ?>
	<!-- Footer End -->

	<!-- Back to Top -->
	<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

	<!-- JavaScript Libraries -->
	<?php include('layout/_js.php') ?>
</body>

</html>
