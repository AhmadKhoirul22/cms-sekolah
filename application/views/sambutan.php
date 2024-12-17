<!DOCTYPE html>
<html lang="en">

    <head>
	<?php include('layout/_css.php') ?>
	<style>
		.service-img {
    height: 200px; /* Atur tinggi yang sama untuk semua gambar */
    overflow: hidden;
    position: relative;
}

.service-img img {
    height: 100%;
    width: 100%;
    object-fit: cover; /* Memastikan gambar tetap rapi */
    object-position: center; /* Gambar tetap di tengah */
}

	</style>
    </head>
    <body>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           <?php include('layout/_navbar.php') ?>
            <!-- Carousel Start -->
            <?php include('layout/_carousel.php') ?>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->
		
        <!-- Services Start -->
        <div class="container-fluid service pb-5 mt-5">
            <div class="container pb-5">
                <div class="card">
					<div class="card-body">
						<div class="text-center mb-3">
							<img src="<?= base_url('assets/temp.jpg') ?>" style="width: 300px;height: 300px;border-radius: 20%;" alt="">
						</div>
						<h3 style="font-weight: bold;" class="mb-5" >Sambutan Kepala Sekolah</h3>
						<p class="float-end mb-5" >Senin, 16-12-2024</p>
						<h6 class="mb-5" >Bismillahirohmannirrohim</h6>
						<h6 class="mb-5" >Assalamualaikum Warahmatullah Wabarakatuh</h6>
						<h6 class="mb-5">Alhamdulillahi robbil alamin kami panjatkan kehadirat Allah SWT, bahwasannya 
							dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan 
							alamat www.smkn2kra.sch.id dapat kami perbaharui. Kami mengucapkan selamat 
							datang di Website kami Sekolah Menengah Pertama Penda Mojogedang 
							yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta 
							khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, 
							aktifitas/kegiatan serta fasilitas sekolah kami.</h6>
						<h6 class="mb-5">
						Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat 
						Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala 
						perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami 
						masih terdapat banyak kekurangan, oleh karena itu kepada seluruh lapisan 
						masyarakat dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.
						</h6>
						<h6 class="mb-5">
						Terima kasih sekian yang dapat kami sampaikan, apabila terdapat kekurangan dan kesalahan, mohon dimaafkan.
						</h6>
						<h6 class="mb-5">
						Wassalamualaikum Warahmatullahi Wabarakatuh
						</h6>
					</div>
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
