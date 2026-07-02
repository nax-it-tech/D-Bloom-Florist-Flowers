<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$waNumber  = $waNumber  ?? '6288218247268';
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<section id="about" class="scrollspy-section first-section margin-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 video-content">
				<figure>
					<img src="<?= esc($assetPath, 'attr') ?>/images/blog-post.jpg"
					     alt="<?= esc($post['judul']) ?>" class="video-image" style="width:100%;border-radius:8px;">
				</figure>
			</div>

			<div class="col-12 col-md-5 description mt-4 mt-md-0">
				<div class="section-header">
					<h2 class="section-title"><?= esc($post['judul']) ?></h2>
				</div>
				<p style="color:#999;font-size:.85rem;"><?= esc($post['tanggal']) ?></p>
				<?= $post['isi'] ?>
				<div class="btn-wrap">
					<a href="<?= base_url('blog') ?>" class="btn btn-black btn-xlarge btn-rounded">
						&larr; Kembali ke Blog
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CTA -->
<section id="why-us" class="scrollspy-section bg-accent padding-xlarge">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 left-column">
				<div class="section-header">
					<h2 class="section-title">Siap Pesan Buket Impianmu?</h2>
				</div>
				<div class="expertize">
					<p>Konsultasikan langsung dengan tim D'Bloom via WhatsApp. Kami siap membantu memilih buket yang sempurna untuk momenmu.</p>
					<div class="btn-wrap">
						<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20konsultasi%20buket!"
						   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
							Chat WhatsApp <i class="icon icon-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 right-column mt-4 mt-md-0">
				<figure class="single-image-holder">
					<img src="<?= esc($assetPath, 'attr') ?>/images/plant-item15.png" alt="D'Bloom Florist">
				</figure>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
