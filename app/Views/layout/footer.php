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
						<li class="menu-item">Paling pojok (diatas hoop kost), Jl. Kolonel Achmad Syam Ruko No.40 Lt 2, Cikeruh, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363</li>
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
	(function() {
		var menuToggle = document.getElementById("menu-toggle");
		var menuList   = document.querySelector("nav#navbar ul.menu-list");

		if (!menuToggle || !menuList) return;

		var menuOpen = false;

		var openStyle = [
			"display:flex",
			"flex-direction:column",
			"position:fixed",
			"top:64px",
			"left:0",
			"width:100%",
			"height:calc(100vh - 64px)",
			"background:rgba(248,241,241,0.98)",
			"z-index:9999",
			"overflow-y:auto",
			"padding:20px 24px",
			"margin:0",
			"list-style:none",
			"backdrop-filter:blur(8px)"
		].join(";");

		function closeMenu() {
			menuOpen = false;
			menuList.removeAttribute("style");
			menuToggle.classList.remove("active");
		}

		function openMenu() {
			menuOpen = true;
			menuList.setAttribute("style", openStyle);
			menuToggle.classList.add("active");
		}

		// Reset saat resize ke desktop
		window.addEventListener("resize", function() {
			if (window.innerWidth >= 992) {
				menuList.removeAttribute("style");
				menuToggle.classList.remove("active");
				menuOpen = false;
			}
		});

		menuToggle.addEventListener("click", function(e) {
			e.stopPropagation();
			menuOpen ? closeMenu() : openMenu();
		});

		// Tutup saat klik link (bukan dropdown toggle)
		menuList.querySelectorAll("a:not([data-bs-toggle])").forEach(function(link) {
			link.addEventListener("click", closeMenu);
		});

		// Tutup saat klik di luar menu
		document.addEventListener("click", function(e) {
			if (menuOpen && !menuList.contains(e.target) && e.target !== menuToggle && !menuToggle.contains(e.target)) {
				closeMenu();
			}
		});
	})();
</script>

</body>
</html>
