<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$waNumber  = $waNumber  ?? '6288218247268';
?>

<footer id="footer" class="bg-accent padding-xlarge">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-3 footer-intro">
				<div class="footer-menu">
					<img src="<?= esc($assetPath, 'attr') ?>/images/logo.png" alt="D'Bloom Florist" class="footer-logo">
					<p>Buket aesthetic artificial, fresh flowers & dried flowers untuk setiap momen spesial. Berdiri sejak 2022 dengan cinta.</p>
					<div class="form-content">
						<form>
							<input type="text" name="wa" placeholder="Nomor WhatsApp kamu">
							<button class="btn btn-black">Hubungi</button>
						</form>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-2">
				<div class="footer-menu">
					<h5>Menu</h5>
					<ul class="menu-list">
						<li class="menu-item"><a href="<?= base_url('/') ?>">Home</a></li>
						<li class="menu-item"><a href="<?= base_url('tentang-kami') ?>">Tentang Kami</a></li>
						<li class="menu-item"><a href="<?= base_url('katalog') ?>">Katalog</a></li>
						<li class="menu-item"><a href="<?= base_url('custom-order') ?>">Custom Order</a></li>
						<li class="menu-item"><a href="<?= base_url('gallery') ?>">Gallery</a></li>
					</ul>
				</div>
			</div>

			<div class="col-6 col-md-2">
				<div class="footer-menu">
					<h5>Kategori</h5>
					<ul class="menu-list">
						<li class="menu-item"><a href="<?= base_url('katalog') ?>#artificial">Artificial Bouquet</a></li>
						<li class="menu-item"><a href="<?= base_url('katalog') ?>#fresh">Fresh Flowers</a></li>
						<li class="menu-item"><a href="<?= base_url('katalog') ?>#dried">Dried & Preserved</a></li>
						<li class="menu-item"><a href="<?= base_url('katalog') ?>#snack">Snack Bouquet</a></li>
						<li class="menu-item"><a href="<?= base_url('katalog') ?>#thumbelina">Thumbelina Series</a></li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-3">
				<div class="footer-menu">
					<h5>Hubungi Kami</h5>
					<ul class="menu-list">
						<li class="menu-item">[Alamat D'Bloom Florist]</li>
						<li class="menu-item">
							<a href="https://wa.me/<?= esc($waNumber) ?>" target="_blank" class="mail-id">
								WhatsApp: +<?= esc($waNumber) ?>
							</a>
						</li>
						<li class="menu-item">
							<a href="https://www.instagram.com/dbloom_florist/" target="_blank" class="mail-id">
								@dbloom_florist
							</a>
						</li>
						<li class="menu-item">Senin–Sabtu: 08.00–21.00 WIB</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</footer>

<div id="footer-bottom" class="bg-accent padding-medium">
	<div class="container">
		<div class="row">
			<div class="col-md-12 footer-links">
				<div class="copyright">
					<p>&copy; <?= date('Y') ?> D'Bloom Florist. All rights reserved.</p>
				</div>
				<div class="social-links">
					<p>Ikuti Kami:</p>
					<ul>
						<li><a href="https://www.instagram.com/dbloom_florist/" target="_blank"><i class="icon icon-behance"></i></a></li>
						<li><a href="https://wa.me/<?= esc($waNumber) ?>" target="_blank"><i class="icon icon-facebook"></i></a></li>
						<li><i class="icon icon-youtube-play"></i></li>
						<li><i class="icon icon-pinterest"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?= esc($assetPath, 'attr') ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?= esc($assetPath, 'attr') ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= esc($assetPath, 'attr') ?>/js/plugins.js"></script>
<script src="<?= esc($assetPath, 'attr') ?>/js/ui-easing.js"></script>
<script src="<?= esc($assetPath, 'attr') ?>/js/videopopup.js"></script>
<script src="<?= esc($assetPath, 'attr') ?>/js/script.js"></script>

<script>
	var scrollToTopBtn = document.getElementById("scroll-up");
	var rootElement = document.documentElement;
	function scrollToTop() {
		rootElement.scrollTo({ top: 0, behavior: "smooth" });
	}
	if (scrollToTopBtn) scrollToTopBtn.addEventListener("click", scrollToTop);

	// Header transparan saat di atas, blur saat scroll
	var header = document.getElementById("header");
	window.addEventListener("scroll", function() {
		if (window.scrollY > 50) {
			header.classList.add("scrolled");
		} else {
			header.classList.remove("scrolled");
		}
	});

	// Hamburger menu toggle
	var menuToggle = document.getElementById("menu-toggle");
	var navigation = document.getElementById("navigation");
	if (menuToggle && navigation) {
		menuToggle.addEventListener("click", function() {
			navigation.classList.toggle("open");
			// Animasi hamburger → X
			this.classList.toggle("active");
		});
		// Tutup menu saat link diklik
		navigation.querySelectorAll("a:not(.dropdown-toggle)").forEach(function(link) {
			link.addEventListener("click", function() {
				navigation.classList.remove("open");
				menuToggle.classList.remove("active");
			});
		});
	}
</script>

</body>
</html>
