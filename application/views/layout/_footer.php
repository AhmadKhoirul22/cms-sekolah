<?php 
$this->db->from('profile');
$profile = $this->db->get()->row();
?>
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5 border-start-0 border-end-0" style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08);">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="footer-item">
								<div class="row mb-2">
									<div class="col-2">
										<img width="100px" height="100px" src="<?= base_url('assets/upload/icon/logo.png') ?>" alt="">
									</div>
									<div class="col-2"></div>
									<div class="col-8">
										<h1 class="text-white justify-content-start"></i><?=$profile->nama_profile ?></h1>
									</div>
								</div>
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            <p class="text-light"><?= $profile->keterangan_profile ?></p>
							<p class="text-white" ><i class="fas fa-map-marker-alt text-primary me-3"></i>  <?= $profile->alamat_profile ?></p>
							<!-- <p class="text-white" ><i class="fas fa-clock text-primary me-3"></i>Jam Kerja : Senin - Jumat, 07:00 - 15:00 WIB</p> -->
							<p class="text-white" ><i class="fas fa-envelope text-primary me-3"></i>  <?= $profile->email_profile ?></p>
							<p class="text-white" ><i class="fa fa-phone-alt text-primary me-3"></i>  <?= $profile->telp_profile ?></p>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-2"> -->
                        <!-- <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Attractions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Tickets</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body">
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.123456789123!2d111.022171!3d-7.5714922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1f162742b6df%3A0x9889a9b03a768610!2sSMP%20Penda%20Mojogedang!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
									width="100%" height="370px"  style="border:0;" title="School Map" allowfullscreen="" loading="lazy"
									referrerpolicy="no-referrer-when-downgrade">
								</iframe>
							</div>
						</div>
                    </div>
                </div>
				<!-- penutup row -->
				 
            </div>
			<div class="row">
				<div class="d-flex justify-content-center ms-2 mt-5">
					<a class="btn btn-lg-square btn-light rounded-circle me-2" href="<?= $profile->facebook ?>"><i class="fab fa-facebook-f"></i></a>
					<!-- <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a> -->
					<a class="btn btn-lg-square btn-light rounded-circle mx-2" href="<?= $profile->instagram ?>"><i class="fab fa-instagram"></i></a>
					<a class="btn btn-lg-square btn-light rounded-circle ms-2" href="<?= $profile->youtube ?>"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
        </div>
		<div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>2024 SMP Penda Mojogedang</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Develop By One Dev Teams
                    </div>
                </div>
            </div>
        </div>
<!-- <div class="footer-item">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <p class="text-white mb-0"><?= $profile->alamat_profile ?></p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+012) 3456 7890</p>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <i class="fab fa-firefox-browser text-primary me-3"></i>
                                <p class="text-white mb-0">Yoursite@ex.com</p>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="#"><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div> -->
