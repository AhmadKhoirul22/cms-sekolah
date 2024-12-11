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
        <!-- Navbar & Hero End -->
		<!-- Features Start -->
       
        <!-- Features End -->
        <!-- Services Start -->
        <div class="container-fluid service pb-5 mt-5">
            <div class="container pb-5">
				
               <div class="col-12">
				<div class="text-center mb-3">
					<img src="<?= base_url('assets/upload/konten/'.$konten['foto']) ?>" class="img-fluid rounded-top w-100" alt="">
				</div>
				<div class="text-center">
					<h4 class="mb-3" ><?= $konten['judul'] ?></h4>
					<p><?= $konten['keterangan'] ?></p>
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
