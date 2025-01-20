<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
	<a href="<?= base_url('home') ?>" class="navbar-brand p-0 mt-3">
		<div class="row">
			<div class="col-3">
				<img src="<?= base_url('assets/upload/icon/logo.png') ?>" alt="Logo">
			</div>
			<!-- <div class="col-2"></div> -->
			<div class="col-9">
				<h5 class="text-primary justify-content-start">SMP PENDA</h5>
				<h5 class="text-primary justify-content-start">MOJOGEDANG</h5>
			</div>
		</div>
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		<span class="fa fa-bars"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<?php $menu = $this->uri->segment(1) ?>

		<div class="navbar-nav ms-auto py-0">
			<a href="<?= base_url('home') ?>"
				class="nav-item nav-link <?php if($menu == 'home'){echo 'active';} ?>">Beranda</a>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link" data-bs-toggle="dropdown">
					<span class="dropdown-toggle">Profile</span>
				</a>
				<div class="dropdown-menu m-0">
					<a href="<?= base_url('sambutan') ?>" class="dropdown-item">Sambutan Kepala Sekolah</a>
					<a href="<?= base_url('profile/sekolah') ?>" class="dropdown-item">Profile Sekolah</a>
					<!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="offer.html" class="dropdown-item">Our offer</a>
                                <a href="FAQ.html" class="dropdown-item">FAQs</a>
                                <a href="404.html" class="dropdown-item">404 Page</a> -->
				</div>
			</div>
			<a href="" class="nav-item nav-link">Artikel</a>
			<a href="<?= base_url('about') ?>"
				class="nav-item nav-link <?php if($menu == 'about'){echo 'active';} ?>">Tentang</a>
			<!-- <a href="blog.html" class="nav-item nav-link">Blogs</a>
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
		</div>
	</div>
</nav>
