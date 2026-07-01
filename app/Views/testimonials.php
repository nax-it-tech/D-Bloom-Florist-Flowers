<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$waNumber  = $waNumber  ?? '6288218247268';
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Stats -->
<section id="association" class="scrollspy-section first-section bg-accent padding-large">
	<div class="container">
		<div class="row">
			<div class="association-content">
				<span><strong>500+</strong> Happy Customers</span>
				<span><strong>4.9★</strong> Rating</span>
				<span><strong>2+</strong> Tahun Berpengalaman</span>
				<span><strong>100%</strong> Same Day Available</span>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials Slider -->
<section id="testimonial" class="scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Kata Pelanggan Kami</h2>
		</div>
		<div class="row">

			<div class="col-md-6">
				<figure class="testimonial-image">
					<img src="<?= esc($assetPath, 'attr') ?>/images/review-image.png" alt="review">
				</figure>
			</div>

			<div class="col-md-6">
				<div class="swiper testimonial-slider">
					<div class="swiper-wrapper">

						<div class="testimonial-item swiper-slide">
							<div class="testimonials-inner">
								<q>Buketnya cantik banget! Persis seperti yang saya request. Warnanya sesuai tema wisuda. Pengirimannya juga tepat waktu. Sangat puas dengan D'Bloom!</q>
								<div class="testimonial-author">
									<div class="author-detail">
										<div class="name">Siti Rahayu</div>
										<div class="author-title">Wisuda S1 – Juni 2025</div>
									</div>
								</div>
							</div>
						</div>

						<div class="testimonial-item swiper-slide">
							<div class="testimonials-inner">
								<q>Sameday order berhasil dan tepat waktu! Bouquet artificial-nya awet banget, masih bagus sampai sekarang berbulan-bulan kemudian. Highly recommend!</q>
								<div class="testimonial-author">
									<div class="author-detail">
										<div class="name">Anisa Putri</div>
										<div class="author-title">Anniversary – Mei 2025</div>
									</div>
								</div>
							</div>
						</div>

						<div class="testimonial-item swiper-slide">
							<div class="testimonials-inner">
								<q>Pertama kali order custom bouquet di sini. Hasilnya melebihi ekspektasi, istri saya sangat senang! Prosesnya mudah cukup chat WA. Pasti repeat order!</q>
								<div class="testimonial-author">
									<div class="author-detail">
										<div class="name">Budi Santoso</div>
										<div class="author-title">Ulang Tahun – April 2025</div>
									</div>
								</div>
							</div>
						</div>

						<div class="testimonial-item swiper-slide">
							<div class="testimonials-inner">
								<q>Pesan dried flowers untuk hadiah wisuda teman. Kemasannya rapi, cantik, dan bunganya awet. Teman saya suka banget! Recommended banget!</q>
								<div class="testimonial-author">
									<div class="author-detail">
										<div class="name">Dewi Maharani</div>
										<div class="author-title">Hadiah Wisuda – April 2025</div>
									</div>
								</div>
							</div>
						</div>

						<div class="testimonial-item swiper-slide">
							<div class="testimonials-inner">
								<q>Custom order untuk Valentine, hasilnya romantis banget! Proses ordernya mudah lewat WA dan tim-nya fast response. Suka banget sama D'Bloom!</q>
								<div class="testimonial-author">
									<div class="author-detail">
										<div class="name">Mega Wulandari</div>
										<div class="author-title">Valentine – Feb 2025</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="button-container">
						<div class="swiper-button-prev icon icon-arrow-left"></div>
						<div class="swiper-button-next icon icon-arrow-right"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- CTA -->
<section id="why-us" class="scrollspy-section bg-accent padding-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-md-6 left-column">
				<div class="section-header">
					<h2 class="section-title">Sudah 500+ Customer Puas!</h2>
				</div>
				<div class="expertize">
					<p>Giliran kamu merasakan buket aesthetic D'Bloom. Hubungi kami sekarang untuk konsultasi gratis, kami siap bantu memilih buket yang sempurna untuk momenmu.</p>
					<div class="btn-wrap">
						<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20pesan%20bouquet!"
						   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
							Pesan Sekarang via WA <i class="icon icon-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 right-column">
				<figure class="single-image-holder">
					<img src="<?= esc($assetPath, 'attr') ?>/images/review-image.png" alt="Happy Customers">
				</figure>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
