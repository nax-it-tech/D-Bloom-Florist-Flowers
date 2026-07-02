<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$imgPath  = $imgPath  ?? base_url('img');
$waNumber = $waNumber ?? '6288218247268';
$images = [
    ['folder'=>'Artificial%20Bouquet', 'file'=>'Beautiful_Bouquet____-removebg-preview.png',                    'nama'=>'Artificial Bouquet'],
    ['folder'=>'Artificial%20Bouquet', 'file'=>'Flower_bouquet___design___Banner_Editing-removebg-preview.png', 'nama'=>'Artificial Bouquet'],
    ['folder'=>'Artificial%20Bouquet', 'file'=>'download-removebg-preview.png',                                  'nama'=>'Artificial Bouquet'],
    ['folder'=>'Artificial%20Bouquet', 'file'=>'download__1_-removebg-preview.png',                              'nama'=>'Artificial Bouquet'],
    ['folder'=>'Artificial%20Bouquet', 'file'=>'download__2_-removebg-preview.png',                              'nama'=>'Artificial Bouquet'],
    ['folder'=>'Fresh%20Flowers',      'file'=>'download-removebg-preview.png',                                  'nama'=>'Fresh Flowers'],
    ['folder'=>'Fresh%20Flowers',      'file'=>'download__1_-removebg-preview.png',                              'nama'=>'Fresh Flowers'],
    ['folder'=>'Fresh%20Flowers',      'file'=>'download__2_-removebg-preview.png',                              'nama'=>'Fresh Flowers'],
    ['folder'=>'Fresh%20Flowers',      'file'=>'download__3_-removebg-preview.png',                              'nama'=>'Fresh Flowers'],
    ['folder'=>'Dried%20%26%20Preserved', 'file'=>'download__4_-removebg-preview.png',                          'nama'=>'Dried & Preserved'],
    ['folder'=>'Dried%20%26%20Preserved', 'file'=>'FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png',   'nama'=>'Dried & Preserved'],
    ['folder'=>'Dried%20%26%20Preserved', 'file'=>'download__6_-removebg-preview.png',                          'nama'=>'Dried & Preserved'],
];
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Filter -->
<section id="association" class="scrollspy-section first-section bg-accent padding-large">
	<div class="container">
		<div class="row">
			<div class="association-content">
				<a href="#gallery-all" class="btn btn-black btn-rounded">Semua Karya</a>
				<a href="#gallery-all" class="btn btn-black btn-rounded">Artificial</a>
				<a href="#gallery-all" class="btn btn-black btn-rounded">Fresh Flowers</a>
				<a href="#gallery-all" class="btn btn-black btn-rounded">Dried</a>
			</div>
		</div>
	</div>
</section>

<!-- Gallery Grid -->
<section id="gallery-all" class="herb-items scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Semua Karya D'Bloom</h2>
		</div>
		<div class="row">
			<?php foreach ($images as $img): ?>
			<div class="col-6 col-md-3">
				<div class="product-list">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/<?= $img['folder'] ?>/<?= rawurlencode($img['file']) ?>"
							     alt="<?= esc($img['nama']) ?>" class="image-product">
							<div class="like-bar">
								<a href="#"><i class="icon icon-like-button"></i><i class="icon icon-liked-button"></i></a>
							</div>
						</div>
						<div class="product-inner">
							<a class="add-to-cart"
							   href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20tertarik%20dengan%20karya%20ini!"
							   target="_blank">
								<span class="cart-text">Pesan via WA</span>
								<i class="icon icon-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="product-content">
						<h3 class="product-title"><a href="#"><?= esc($img['nama']) ?></a></h3>
					</div>
				</div>
			</div>
			<?php endforeach; ?>

			<div class="btn-wrap align-center margin-small">
				<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20pesan%20bouquet!"
				   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
					Pesan Sekarang via WA <i class="icon icon-arrow-right"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
