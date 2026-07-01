<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$waNumber  = $waNumber  ?? '6288218247268';
$posts = [
    ['slug'=>'cara-pilih-buket-artificial', 'judul'=>'Cara Pilih Buket Artificial yang Berkualitas',   'img'=>'post-item15.jpg', 'ringkasan'=>'Tidak semua buket artificial sama. Pelajari cara membedakan kualitas bahan dan tampilan yang natural.'],
    ['slug'=>'ide-hadiah-wisuda',            'judul'=>'Ide Hadiah Wisuda yang Berkesan & Awet',         'img'=>'post-item16.jpg', 'ringkasan'=>'Wisuda hanya sekali seumur hidup. Berikan hadiah buket yang bisa dikenang bertahun-tahun.'],
    ['slug'=>'perawatan-bunga-kering',       'judul'=>'Perawatan Bunga Kering agar Tetap Cantik',      'img'=>'post-item17.jpg', 'ringkasan'=>'Dried flowers bisa bertahan sangat lama jika dirawat dengan benar. Simak tips simpelnya.'],
    ['slug'=>'bouquet-anniversary',          'judul'=>'Bouquet untuk Anniversary: Pilih yang Mana?',   'img'=>'post-item15.jpg', 'ringkasan'=>'Fresh, artificial, atau dried? Kami bantu kamu memilih sesuai anggaran dan makna yang ingin disampaikan.'],
    ['slug'=>'tren-buket-2025',              'judul'=>'Tren Buket 2025: Aesthetic Minimalis & Pastel', 'img'=>'post-item16.jpg', 'ringkasan'=>'Dari warna nude pastel hingga wrapping craft paper, inilah tren bouquet yang mendominasi 2025.'],
    ['slug'=>'proses-custom-bouquet',        'judul'=>'Custom Bouquet: Prosesnya Seperti Apa?',        'img'=>'post-item17.jpg', 'ringkasan'=>'Pernah penasaran bagaimana proses custom bouquet dari request sampai jadi? Kami bocorkan di sini.'],
];
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Filter kategori -->
<section id="association" class="scrollspy-section first-section bg-accent padding-large">
	<div class="container">
		<div class="row">
			<div class="association-content">
				<a href="#blog-grid" class="btn btn-black btn-rounded">Semua</a>
				<a href="#blog-grid" class="btn btn-black btn-rounded">Tips</a>
				<a href="#blog-grid" class="btn btn-black btn-rounded">Inspirasi</a>
				<a href="#blog-grid" class="btn btn-black btn-rounded">Tren</a>
			</div>
		</div>
	</div>
</section>

<!-- Blog Grid -->
<section id="blog-grid" class="scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Blog &amp; Tips Buket</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="post-grid">
					<div class="row">
						<?php foreach ($posts as $post): ?>
						<div class="col-md-4">
							<article class="post-item">
								<figure>
									<a href="<?= base_url('blog/' . esc($post['slug'], 'url')) ?>" class="image-hvr-effect">
										<img src="<?= esc($assetPath, 'attr') ?>/images/<?= esc($post['img']) ?>"
										     alt="<?= esc($post['judul']) ?>" class="post-image">
									</a>
								</figure>
								<div class="post-content">
									<h3 class="post-title">
										<a href="<?= base_url('blog/' . esc($post['slug'], 'url')) ?>">
											<?= esc($post['judul']) ?>
										</a>
									</h3>
									<p><?= esc($post['ringkasan']) ?></p>
								</div>
							</article>
						</div>
						<?php endforeach; ?>

						<div class="btn-wrap align-center margin-small">
							<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%2C%20saya%20mau%20konsultasi!"
							   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
								Konsultasi via WA <i class="icon icon-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
