<div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
	<h4 class="text-primary"></h4>
	<h1 class="display-5 mb-4">Artikel</h1>
	<p class="mb-0">Selamat datang dihalaman artikel kami! Disini kita dapat mendapatkan berbagai informasi yang menarik
	</p>
</div>
<div class="row g-4">
	<?php foreach($konten as $row){ ?>
	<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
		<div class="service-item">
			<div class="service-img">
				<img src="<?= base_url('assets/upload/konten/'.$row['foto']) ?>" class="img-fluid rounded-top w-100"
					alt="Image">
			</div>
			<div class="rounded-bottom p-4">
				<a href="#"
					class="h4 d-inline-block mb-4"><?= substr($row['judul'],0,20).(strlen($row['judul']) > 20 ? '...' : '' ) ?></a>
				<div class="row">
					<div class="col-8">
						<p><?= tanggal_indo($row['tanggal'],true) ?></p>
					</div>
					<div class="col-4">
						<div class="float-end">
							<p><?= $row['nama_kategori'] ?></p>
						</div>
					</div>
				</div>
				<!-- <?= $row['keterangan'] ?> -->
				<!-- <?= substr($row['keterangan'],0,20).(strlen($row['keterangan']) > 20 ? '...' : '') ?> -->
				<div class="row">
					<div class="col-6">
						<div class="row">
							<div class="col-sm-2"><i class="fas fa-user"></i></div>
							<div class="col-sm-10">
								<p><?= $row['nama'] ?></p>
							</div>
						</div>
					</div>
					<!-- <div class="col-4"></div> -->
					<div class="col-6">
						<a class="btn btn-primary rounded-pill"
							href="<?= base_url('home/detail/'.$row['slug']) ?>">Learn more</a>
						<!-- <a class="btn btn-primary rounded-pill" href="<?= base_url('home/detail/'.$row['id_konten']) ?>">Learn more</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
