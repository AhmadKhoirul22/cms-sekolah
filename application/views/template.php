<!DOCTYPE html>
<html lang="en">
    <head>
	<?php include('layout/_css.php') ?>
	<style>.service-img {
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
            <?php include('layout/_carousel.php') ?>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


		<!-- Features Start -->
        <?php include('layout/_features.php') ?>
        <!-- Features End -->

        <!-- Services Start -->
        <div class="container-fluid service pb-5 mt-5">
            <div class="container pb-5">
                <?= $contents; ?>
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
