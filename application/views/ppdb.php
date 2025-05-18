<div class="col-12" style="position: relative;">
	<div class="text-center">
		<img src="<?= base_url('assets/upload/konten/'.$ppdb->foto) ?>" class=""
			style="border-radius: 3%;max-width: 100%;height: auto;" alt="">
	</div>
	<article style="position: relative;z-index: 2; background: white; padding: 20px; margin-top: -50px; border-radius: 10px;
						width: 90%;left: 5%;box-shadow: 0px 4px 12px black;">
		</h3>
		<h1 class="bold " style="font-weight: bold;text-transform: uppercase;"><?= $ppdb->judul ?></h1>
		<h2 class="bold text-primary" style="font-weight: bold;text-transform: uppercase;">Penerimaan
			Peserta Didik Baru</h2>
		<h4 class="bold mb-5" style="font-weight: bold;text-transform: uppercase;">Tahun Pelajaran
			<?= $ppdb->tahun_ajaran ?></h4>
		<div class="col-lg-12 d-flex justify-content-center">
			<div class="row w-100" style="max-width: 1200px;">
				<div class="col-md-4 mb-4">
					<div class="p-3 bg-light border rounded shadow-sm h-100">
						<h5 class="mb-2 text-center">Program Pembiasaan</h5>
						<div class="mb-3">
							<?= $ppdb->program_pembiasaan ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="p-3 bg-light border rounded shadow-sm h-100">
						<h5 class="mb-2 text-center">Persyaratan</h5>
						<div class="mb-3">
							<?= $ppdb->persyaratan ?>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-4">
					<div class="p-3 bg-light border rounded shadow-sm h-100">
						<h5 class="mb-2 text-center">Ekstrakulikuler</h5>
						<div class="mb-3">
							<?= $ppdb->ekstrakulikuler ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
			<a href="<?= $ppdb->link ?>" target="_blank">
				<button class="btn btn-primary mt-3 mb-4">Daftar Disini!!</button>
			</a>
		</div>

		<div class="col-12">
			<div class="mb-5">
				<h5 class="fw-bold mb-3">Hubungi Kami :</h5>
				<ul class="list-unstyled">
					<li class="mb-3">
						<div class="d-flex align-items-center">
							<span class="me-2">Bu Dhilla :</span>
							<a class="btn btn-sm btn-success" href="https://wa.me/628122838425" target="_blank">
								<i class="fab fa-whatsapp"></i> Whatsapp Disini!!
							</a>
						</div>
					</li>
					<li class="mb-3">
						<div class="d-flex align-items-center">
							<span class="me-2">Pak Wins :</span>
							<a class="btn btn-sm btn-success" href="https://wa.me/6281329368882" target="_blank">
								<i class="fab fa-whatsapp"></i> Whatsapp Disini!!
							</a>
						</div>
					</li>
					<li class="mb-3">
						<div class="d-flex align-items-center">
							<span class="me-2">Bu Rina :</span>
							<a class="btn btn-sm btn-success" href="https://wa.me/6289603928760" target="_blank">
								<i class="fab fa-whatsapp"></i> Whatsapp Disini!!
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-4">
			<div class="mb-5">
				<h5 class="bold">Bagikan</h5>
				<div class="d-flex">
					<input id="url-to-copy" type="text" readonly value="<?= current_url() ?>" class="form-control"
						style="width: 80%;">
					<button type="button" class="btn btn-success" style="width: 20%;"
						onclick="copyToClipboard()">Salin</button>
				</div>
			</div>

			<script>
				function copyToClipboard() {
					// Ambil elemen input
					const inputElement = document.getElementById('url-to-copy');
					// Salin nilai input ke clipboard
					navigator.clipboard.writeText(inputElement.value)
						.then(() => {
							alert('Teks berhasil disalin ke clipboard!');
						})
						.catch(err => {
							console.error('Gagal menyalin teks: ', err);
						});
				}
			</script>
		</div>
	</article>
</div>
