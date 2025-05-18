<div class="col-xl-6 mb-3">
	<form action="<?= base_url('artikel/cari_konten') ?>" method="get" id="searchForm" class="w-100">
    <div class="input-group w-75 mx-auto">
        <input type="search" class="form-control p-3" name="keyword" id="searchInput"
            placeholder="Cari konten di sini..." aria-label="Search">
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
						<a class="btn btn-primary float-end rounded-pill"
							href="<?= base_url('home/detail/'.$row['slug']) ?>">Selengkapnya</a>
						<!-- <a class="btn btn-primary rounded-pill" href="<?= base_url('home/detail/'.$row['id_konten']) ?>">Learn more</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<div class="mt-5">&nbsp;</div>
<div class="mt-5" >
	<?= $pagination ?>
</div>
