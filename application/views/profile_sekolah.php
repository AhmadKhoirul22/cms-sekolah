<div class="col-12">
	<h4 class="text-center mb-5 mt-5"><?= $title ?></h4>
	<div class="row">
		<div class="col-8">
			<form>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
					<div class="col-sm-10">
						<input type="text" readonly class="form-control" id="basic-default-name"
							value="SMP PENDA MOJOGEDANG">
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
						<input type="text" readonly class="form-control" id="basic-default-name"
							value="426, 1967-01-01">
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
	<h1 class="text-center mb-3 mt-3">Visi dan Misi</h1>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h5>Visi : </h5>
					<p>Religius, Berprestasi, Beraklaq, Mandiri, dan Berwawasan Lingkungan</p>
					<h5>Misi : </h5>
					<p>
						<ol>
							<li>Pelaksanaan pembiasaan ibadah secara rutin disekolah pada semua peserta didik</li>
							<li>Peningkatan kwalitas kegiatan pembelajaraan oleh tenaga pendidik</li>
							<li>Pelaksanaan penambahan jam pelajaran disekolah dan diluar sekolah</li>
							<li>Optimalisasi pelaksanaan ekstrakurikuler dan penyaluran bakat minat peserta didik</li>
							<li>Penambahan sarana dan prasarana pembelajaran disekolah</li>
							<li>Mendorong dan menumbuhkan terciptanya akhlak mulia dan budi pekerti luhur</li>
							<li>Optimalisasi pelaksanaan Ekstrakurikuler Pramuka, Marching Band, dan Tari</li>
							<li>Melaksanakan dan mengembangkan kegiatan kebersihan, kesehatan dan pelestarian lingkungan
							</li>
						</ol>
					</p>
				</div>
			</div>
		</div>
	</div>
	<h1 class="text-center mb-3 mt-3">Daftar Tenaga Pengajar</h1>
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
	<div class="row">
		<h1 class="text-center mb-3 mt-3">Sarana Dan Prasarana</h1>
		<div class="card">
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nama Sarana</th>
							<th>Kondisi</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ruang Kelas</td>
							<td>Baik</td>
							<td>12</td>
						</tr>
						<tr>
							<td>Laboratorium IPA</td>
							<td>Baik</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Perpustakaan</td>
							<td>Baik</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Sanitasi Guru</td>
							<td>Baik</td>
							<td>1</td>
						</tr>
						<tr>
							<td>Sanitasi Siswa</td>
							<td>Baik</td>
							<td>1</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
