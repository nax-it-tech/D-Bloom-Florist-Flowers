<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$imgPath  = $imgPath  ?? base_url('img');
$waNumber = $waNumber ?? '6288218247268';

$artificial = [
    ['file' => 'Beautiful_Bouquet____-removebg-preview.png',                     'nama' => 'Buket Artificial Elegan',    'harga' => 'Rp 150.000'],
    ['file' => 'Flower_bouquet___design___Banner_Editing-removebg-preview.png',  'nama' => 'Buket Artificial Pink',      'harga' => 'Rp 120.000'],
    ['file' => 'download-removebg-preview.png',                                   'nama' => 'Buket Artificial Classic',   'harga' => 'Rp 95.000'],
    ['file' => 'download__1_-removebg-preview.png',                               'nama' => 'Buket Artificial Pastel',    'harga' => 'Rp 110.000'],
    ['file' => 'download__2_-removebg-preview.png',                               'nama' => 'Buket Artificial Modern',    'harga' => 'Rp 130.000'],
];
$fresh = [
    ['file' => 'download-removebg-preview.png',    'nama' => 'Fresh Rose Bouquet',     'harga' => 'Rp 85.000'],
    ['file' => 'download__1_-removebg-preview.png','nama' => 'Fresh Mixed Flowers',    'harga' => 'Rp 95.000'],
    ['file' => 'download__2_-removebg-preview.png','nama' => 'Fresh Tulip Bouquet',    'harga' => 'Rp 100.000'],
    ['file' => 'download__3_-removebg-preview.png','nama' => 'Fresh Lilies Bouquet',   'harga' => 'Rp 110.000'],
];
$dried = [
    ['file' => 'download__4_-removebg-preview.png',                              'nama' => 'Dried Flower Pastel',   'harga' => 'Rp 115.000'],
    ['file' => 'FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png',      'nama' => 'Dried Florist Choice',  'harga' => 'Rp 135.000'],
    ['file' => 'download__6_-removebg-preview.png',                              'nama' => 'Dried Natural Brown',   'harga' => 'Rp 105.000'],
];
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Filter / Kategori -->
<section id="association" class="scrollspy-section first-section bg-accent padding-large">
	<div class="container">
		<div class="row">
			<div class="association-content">
				<a href="#artificial" class="btn btn-black btn-rounded">Artificial Bouquet</a>
				<a href="#fresh" class="btn btn-black btn-rounded">Fresh Flowers</a>
				<a href="#dried" class="btn btn-black btn-rounded">Dried & Preserved</a>
				<a href="#snack" class="btn btn-black btn-rounded">Snack Bouquet</a>
				<a href="#thumbelina" class="btn btn-black btn-rounded">Thumbelina Series</a>
			</div>
		</div>
	</div>
</section>

<!-- Artificial Bouquet -->
<section id="artificial" class="herb-items scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Artificial Bouquet</h2>
		</div>
		<div class="row">
			<?php foreach ($artificial as $p): ?>
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/<?= rawurlencode($p['file']) ?>"
							     alt="<?= esc($p['nama']) ?>" class="image-product">
							<div class="like-bar">
								<a href="#"><i class="icon icon-like-button"></i><i class="icon icon-liked-button"></i></a>
							</div>
						</div>
						<div class="product-inner">
							<a class="add-to-cart"
							   href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20tanya%20<?= rawurlencode($p['nama']) ?>"
							   target="_blank">
								<span class="cart-text">Tanya via WA</span>
								<i class="icon icon-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#"><?= esc($p['nama']) ?></a></h3>
						<div class="product-price"><?= esc($p['harga']) ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<div class="btn-wrap align-center margin-small">
				<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20saya%20mau%20tanya%20Artificial%20Bouquet"
				   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
					Tanya Stok via WA <i class="icon icon-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Fresh Flowers -->
<section id="fresh" class="herb-items scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Fresh Flowers</h2>
		</div>
		<div class="row">
			<?php foreach ($fresh as $p): ?>
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Fresh%20Flowers/<?= rawurlencode($p['file']) ?>"
							     alt="<?= esc($p['nama']) ?>" class="image-product">
							<div class="like-bar">
								<a href="#"><i class="icon icon-like-button"></i><i class="icon icon-liked-button"></i></a>
							</div>
						</div>
						<div class="product-inner">
							<a class="add-to-cart"
							   href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20tanya%20<?= rawurlencode($p['nama']) ?>"
							   target="_blank">
								<span class="cart-text">Tanya via WA</span>
								<i class="icon icon-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#"><?= esc($p['nama']) ?></a></h3>
						<div class="product-price"><?= esc($p['harga']) ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Dried & Preserved -->
<section id="dried" class="herb-items scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Dried &amp; Preserved</h2>
		</div>
		<div class="row">
			<?php foreach ($dried as $p): ?>
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Dried%20%26%20Preserved/<?= rawurlencode($p['file']) ?>"
							     alt="<?= esc($p['nama']) ?>" class="image-product">
							<div class="like-bar">
								<a href="#"><i class="icon icon-like-button"></i><i class="icon icon-liked-button"></i></a>
							</div>
						</div>
						<div class="product-inner">
							<a class="add-to-cart"
							   href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20tanya%20<?= rawurlencode($p['nama']) ?>"
							   target="_blank">
								<span class="cart-text">Tanya via WA</span>
								<i class="icon icon-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#"><?= esc($p['nama']) ?></a></h3>
						<div class="product-price"><?= esc($p['harga']) ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- Snack & Thumbelina placeholder -->
<section id="snack" class="scrollspy-section bg-accent padding-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 left-column">
				<div class="section-header">
					<h2 class="section-title">Snack &amp; Money Bouquet</h2>
				</div>
				<div class="expertize">
					<p>Buket unik berisi snack favorit atau uang tunai, cocok untuk hadiah ulang tahun, wisuda, atau perayaan spesial lainnya.</p>
					<ul>
						<li><span class="list-number">1.</span>
							<div class="list-title"><h4>Snack Bouquet</h4><p>Pilihan snack bisa disesuaikan selera.</p></div>
						</li>
						<li><span class="list-number">2.</span>
							<div class="list-title"><h4>Money Bouquet</h4><p>Hadiah uang yang aesthetic dan berkesan.</p></div>
						</li>
						<li><span class="list-number">3.</span>
							<div class="list-title"><h4>Thumbelina Series</h4><p>Buket mini aesthetic, imut dan elegan.</p></div>
						</li>
					</ul>
				</div>
				<div class="btn-wrap">
					<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20saya%20mau%20tanya%20Snack%20Bouquet"
					   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
						Tanya Harga <i class="icon icon-arrow-right"></i>
					</a>
				</div>
			</div>
			<div class="col-12 col-md-6 right-column mt-4 mt-md-0">
				<figure class="single-image-holder">
					<img src="<?= esc($imgPath) ?>/Dried%20%26%20Preserved/FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png"
					     alt="Snack Bouquet">
				</figure>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
