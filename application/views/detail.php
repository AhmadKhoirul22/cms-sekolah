<div class="col-12" style="position: relative;">
	<div class="text-center">
		<img src="<?= base_url('assets/upload/konten/'.$konten['foto']) ?>" class=""
			style="border-radius: 3%;max-width: 100%;height: auto;" alt="">
	</div>
	<article style="position: relative;z-index: 2; background: white; padding: 20px; margin-top: -50px; border-radius: 10px;
						width: 90%;left: 5%;box-shadow: black;">
		<h3 class="mb-3"><span class="badge bg-success text-light"><?= $konten['nama_kategori'] ?></span></h3>
		<h1 class="bold mb-3" style="font-weight: bold;text-transform: uppercase;"><?= $konten['judul'] ?></h1>
		<div class="col-3">
			<div class="row">
				<div class="col-sm-3">
					<i class="fas fa-user fa-3x"></i>
				</div>
				<div class="col-sm-9">
					<div class="col-lg-12">
						<?=$konten['nama']  ?>
					</div>
					<div class="col-lg-12">
						<?= tanggal_indo($konten['tanggal']) ?>
					</div>
					<!-- <p><?= $konten['nama'] ?></p>
									 <p><?= tanggal_indo($konten['tanggal']) ?></p> -->
				</div>
			</div>
		</div>
		<article>
			<p class="mb-5"><?= $konten['keterangan'] ?></p>
		</article>
		<div class="col-4">
			<div class="mb-5">
				<h3 class="bold">Bagikan</h3>
				<div class="d-flex">
					<input id="url-to-copy" type="text" readonly value="<?= current_url() ?>" class="form-control"
						style="width: 80%;">
					<button type="button" class="btn btn-success" style="width: 20%;"
						onclick="copyToClipboard()">Salin</button>
				</div>
				<!-- <div class="row">
									<div class="col-sm-10 mb-3">
										<input id="url-to-copy" type="text" readonly value="<?= current_url() ?>" class="form-control">
									</div>
									<div class="col-sm-2">
										<button type="button" class="btn btn-success" onclick="copyToClipboard()">Salin</button>
									</div>
								</div> -->
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
