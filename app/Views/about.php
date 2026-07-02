<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$imgPath   = $imgPath   ?? base_url('img');
$waNumber  = $waNumber  ?? '6288218247268';
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- About Hero -->
<section id="about" class="scrollspy-section first-section margin-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 video-content">
				<div class="video-player">
					<a id="video-item" href="javascript:void(0)">
						<i class="icon icon-youtube-player"></i>
						<img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/Beautiful_Bouquet____-removebg-preview.png"
						     alt="D'Bloom Florist" class="video-image">
					</a>
				</div>
			</div>

			<div class="col-12 col-md-5 description mt-4 mt-md-0">
				<div class="section-header">
					<h2 class="section-title">Perjalanan Kami</h2>
				</div>
				<p>D'Bloom Florist berdiri sejak 2022 dengan visi sederhana: membuat setiap momen spesial lebih indah dan berkesan melalui buket bunga yang aesthetic dan berkualitas.</p>
				<p>Dari sebuah passion kecil, kami tumbuh menjadi florist terpercaya dengan ratusan pelanggan puas. Kami menghadirkan buket artificial awet, fresh flowers, serta dried & preserved flowers yang bisa dicustom sesuai keinginanmu.</p>
				<div class="btn-wrap">
					<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20ingin%20tahu%20lebih%20lanjut!"
					   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
						Hubungi Kami <i class="icon icon-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Values / Why Us -->
<section id="why-us" class="scrollspy-section bg-accent padding-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 left-column">
				<div class="section-header">
					<h2 class="section-title">Nilai-nilai D'Bloom</h2>
				</div>
				<div class="expertize">
					<p>Kami berkomitmen menghadirkan buket terbaik dengan layanan yang personal, cepat, dan terpercaya untuk setiap momen berhargamu.</p>
					<ul>
						<li>
							<span class="list-number">1.</span>
							<div class="list-title">
								<h4>Custom Order</h4>
								<p>Desain bebas sesuai tema, warna, dan budget kamu.</p>
							</div>
						</li>
						<li>
							<span class="list-number">2.</span>
							<div class="list-title">
								<h4>Same Day Delivery</h4>
								<p>Order pagi, buket sampai di tangan kamu hari yang sama.</p>
							</div>
						</li>
						<li>
							<span class="list-number">3.</span>
							<div class="list-title">
								<h4>Kualitas Terjamin</h4>
								<p>Bahan pilihan, buket artificial awet, tidak layu selamanya.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-6 right-column mt-4 mt-md-0">
				<figure class="single-image-holder">
					<img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/Flower_bouquet___design___Banner_Editing-removebg-preview.png"
					     alt="D'Bloom Bouquet">
				</figure>
			</div>
		</div>
	</div>
</section>

<!-- Tim -->
<section id="team" class="herb-items scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Tim D'Bloom</h2>
		</div>
		<div class="row">
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($assetPath, 'attr') ?>/images/review-item1.jpg" alt="Tim" class="image-product">
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#">Florist Utama</a></h3>
						<div class="product-price">D'Bloom Team</div>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($assetPath, 'attr') ?>/images/review-item2.jpg" alt="Tim" class="image-product">
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#">Desainer Bouquet</a></h3>
						<div class="product-price">D'Bloom Team</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Services -->
<section id="services">
	<div class="container">
		<div class="row">
			<div class="col-6 col-md-3">
				<div class="services-item">
					<i class="icon icon-shopping-cart"></i>
					<div class="services-content">
						<div class="services-title">Same Day Order</div>
						<p>Pesan pagi, terima hari ini</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="services-item">
					<i class="icon icon-secure"></i>
					<div class="services-content">
						<div class="services-title">Custom Order</div>
						<p>Desain sesuai keinginanmu</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="services-item">
					<i class="icon icon-guarantee"></i>
					<div class="services-content">
						<div class="services-title">Kualitas Terjamin</div>
						<p>Buket artificial awet selamanya</p>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="services-item">
					<i class="icon icon-price-tag"></i>
					<div class="services-content">
						<div class="services-title">Harga Terjangkau</div>
						<p>Mulai dari Rp 75.000</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
