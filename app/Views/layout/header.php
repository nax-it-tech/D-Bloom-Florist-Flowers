<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$waNumber  = $waNumber  ?? '6288218247268';
$title     = $title     ?? "D'Bloom Florist";

// Deteksi halaman aktif
$uri = service('uri');
$currentSegment = '/' . ltrim($uri->getPath(), '/');

function isActive(string $path, string $current): string {
    // Home: exact match
    if ($path === '/' && $current === '/') return 'active-menu';
    // Halaman lain: cek prefix
    if ($path !== '/' && str_starts_with($current, $path)) return 'active-menu';
    return '';
}
?>
<!DOCTYPE html>
<html class="no-js" lang="id">
	<head>
		<title><?= esc($title) ?> | D'Bloom Florist</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="D'Bloom Florist">
	    <meta name="keywords" content="buket bunga, artificial bouquet, bunga wisuda, bunga ulang tahun, florist">
	    <meta name="description" content="D'Bloom Florist – Buket aesthetic artificial, fresh flowers & dried flowers untuk setiap momen spesial.">

	    <link rel="icon" type="image/png" href="<?= base_url('img/horeimg/fv.png') ?>">
	    <link rel="shortcut icon" type="image/png" href="<?= base_url('img/horeimg/fv.png') ?>">
	    <link rel="stylesheet" type="text/css" href="<?= esc($assetPath, 'attr') ?>/css/bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="<?= esc($assetPath, 'attr') ?>/icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="<?= esc($assetPath, 'attr') ?>/css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="<?= esc($assetPath, 'attr') ?>/style.css">
	    <link rel="stylesheet" type="text/css" href="<?= esc($assetPath, 'attr') ?>/dbloom-theme.css">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
	</head>

<body>

<header id="header" class="fixed">
	<div id="header-wrap">
		<div class="main-logo">
			<a href="<?= base_url('/') ?>">
				D'Bloom Florist
			</a>
		</div>

		<nav id="navbar">
			<!-- Hamburger toggle untuk mobile -->
			<button class="navbar-toggler" type="button" id="menu-toggle" aria-label="Toggle navigation">
				<span class="toggler-bar"></span>
				<span class="toggler-bar"></span>
				<span class="toggler-bar"></span>
			</button>

			<div class="main-menu" id="navigation">
				<ul class="menu-list navbar-nav">
					<li class="menu-item">
						<a href="<?= base_url('/') ?>" class="nav-link <?= isActive('/', $currentSegment) ?>">Home</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('tentang-kami') ?>" class="nav-link <?= isActive('/tentang-kami', $currentSegment) ?>">Tentang</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('katalog') ?>" class="nav-link <?= isActive('/katalog', $currentSegment) ?>">Katalog</a>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('custom-order') ?>" class="nav-link <?= isActive('/custom-order', $currentSegment) ?>">Custom</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" data-bs-toggle="dropdown" aria-expanded="false"
						   class="nav-link dropdown-toggle <?= (in_array($currentSegment, ['/gallery','/testimoni','/blog']) ? 'active-menu' : '') ?>">
							Explore
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?= base_url('gallery') ?>" class="dropdown-item <?= isActive('/gallery', $currentSegment) ?>">
									Gallery
								</a>
							</li>
							<li>
								<a href="<?= base_url('testimoni') ?>" class="dropdown-item <?= isActive('/testimoni', $currentSegment) ?>">
									Testimoni
								</a>
							</li>
							<li>
								<a href="<?= base_url('blog') ?>" class="dropdown-item <?= isActive('/blog', $currentSegment) ?>">
									Blog
								</a>
							</li>
						</ul>
					</li>
					<li class="menu-item">
						<a href="<?= base_url('kontak') ?>" class="nav-link <?= isActive('/kontak', $currentSegment) ?>">Kontak</a>
					</li>
				</ul>
			</div>

			<div class="right-element icon-element">
				<div class="search-bar">
					<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
						<i class="icon icon-search"></i>
					</a>
					<form role="search" method="get" class="search-box">
						<input class="search-field text search-input" placeholder="Cari produk..." type="search">
					</form>
				</div>

				<div class="user-account for-buy">
					<a href="<?= base_url('kontak') ?>">
						<i class="icon icon-user"></i>
					</a>
				</div>

				<div class="like-bar for-buy">
					<a href="<?= base_url('gallery') ?>">
						<i class="icon icon-like-button"></i>
						<i class="icon icon-liked-button"></i>
					</a>
				</div>

				<div class="cart for-buy">
					<a href="https://wa.me/<?= esc($waNumber) ?>" target="_blank">
						<i class="icon icon-account"></i>
					</a>
				</div>

			</div><!--right-element-->

		</nav>

	</div><!--header-wrap-->
</header>
