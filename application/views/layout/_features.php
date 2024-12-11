
<div class="container-fluid feature pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"></h4>
                    <h1 class="display-5 mb-4"></h1>
                    <p class="mb-0"></p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-file-alt fa-4x text-primary"></i>
                            </div>
                            <h4><span class="counter" data-target="15" >0</span>+</h4>
                            <p class="mb-4">Mata Pelajaran</p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-user fa-4x text-primary"></i>
                            </div>
                            <h4><span class="counter" data-target="360" >0</span>+</h4>
                            <p class="mb-4">Pelajar Aktif</p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-user fa-4x text-primary"></i>
                            </div>
                            <h4><span class="counter" data-target="50" >0</span>+</h4>
                            <p class="mb-4">Guru Aktif</p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fas fa-book fa-4x text-primary"></i>
                            </div>
                            <h4><span class="counter" data-target="10" >0</span>+</h4>
                            <p class="mb-4">Staff dan Karyawan</p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll('.counter');
        const duration = 5000; // Durasi animasi dalam milidetik (2 detik)
        
        counters.forEach(counter => {
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const increment = target / (duration / 100);

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 100);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();
        });
    });
</script>
