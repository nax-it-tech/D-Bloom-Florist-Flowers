<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$imgPath  = $imgPath  ?? base_url('img');
$waNumber = $waNumber ?? '6288218247268';
?>

<!-- ===================== HERO SWIPER ===================== -->
<section id="intro" class="scrollspy-section swiper intro-swiper">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
            <div class="banner-content">
                <h2 class="banner-title">Buket Aesthetic Awet untuk <span class="text-pri">Setiap Momen</span>.</h2>
                <div class="btn-wrap">
                    <a href="https://wa.me/<?= esc($waNumber) ?>" class="btn btn-black btn-xlarge btn-rounded">
                        Pesan Sekarang <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <img src="<?= $imgPath ?>/Artificial%20Bouquet/Beautiful_Bouquet____-removebg-preview.png" alt="Buket Artificial D'Bloom">
        </div>

        <div class="swiper-slide">
            <div class="banner-content">
                <h2 class="banner-title">Custom Bouquet sesuai <span class="text-pri">Keinginanmu</span>.</h2>
                <div class="btn-wrap">
                    <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                        Lihat Katalog <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <img src="<?= $imgPath ?>/Artificial%20Bouquet/download-removebg-preview.png" alt="Custom Bouquet D'Bloom">
        </div>

        <div class="swiper-slide">
            <div class="banner-content">
                <h2 class="banner-title">Same Day Delivery untuk <span class="text-pri">Momen Spesial</span>.</h2>
                <div class="btn-wrap">
                    <a href="<?= base_url('custom-order') ?>" class="btn btn-black btn-xlarge btn-rounded">
                        Custom Order <i class="icon icon-arrow-right"></i>
                    </a>
                </div>
            </div>
            <img src="<?= $imgPath ?>/Fresh%20Flowers/download-removebg-preview.png" alt="Same Day Delivery D'Bloom">
        </div>

    </div>
    <div class="swiper-pagination"></div>
</section>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>


<!-- ===================== BEST SELLER ===================== -->
<section id="fresh-arrivals" class="herb-items scrollspy-section margin-xlarge">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title">Best Seller</h2>
        </div>

        <div class="row">

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Artificial%20Bouquet/Beautiful_Bouquet____-removebg-preview.png" alt="Buket Artificial Pink" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Buket Artificial Pink</a></h3>
                        <div class="product-price">Rp 120.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Artificial%20Bouquet/download-removebg-preview.png" alt="Buket Artificial Pastel" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Buket Artificial Pastel</a></h3>
                        <div class="product-price">Rp 95.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Artificial%20Bouquet/download__1_-removebg-preview.png" alt="Buket Artificial Elegan" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Buket Artificial Elegan</a></h3>
                        <div class="product-price">Rp 150.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Artificial%20Bouquet/download__2_-removebg-preview.png" alt="Buket Fresh Roses" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Buket Fresh Roses</a></h3>
                        <div class="product-price">Rp 85.000</div>
                    </div>
                </div>
            </div>

            <div class="col-12 btn-wrap align-center margin-small">
                <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                    Lihat Semua <i class="icon icon-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- ===================== KOLEKSI PILIHAN ===================== -->
<section id="collection" class="scrollspy-section margin-xlarge">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Koleksi Pilihan</h2>
        </div>

        <div class="row">
            <div class="swiper collection-swiper">
                <div class="swiper-wrapper">

                    <div class="col-md-4 swiper-slide">
                        <div class="product-item">
                            <div class="image-holder">
                                <img src="<?= $imgPath ?>/Artificial%20Bouquet/download__1_-removebg-preview.png" alt="Artificial Bouquet">
                                <div class="item-info">
                                    <p>Buket artificial pilihan terbaik — tidak layu, tahan lama, dan tampil cantik untuk dekorasi maupun hadiah di setiap momen spesial.</p>
                                    <div class="btn-wrap margin-small">
                                        <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                                            Lihat Koleksi <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Artificial Bouquet</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 swiper-slide">
                        <div class="product-item">
                            <div class="image-holder">
                                <img src="<?= $imgPath ?>/Fresh%20Flowers/download__1_-removebg-preview.png" alt="Fresh Flowers">
                                <div class="item-info">
                                    <p>Bunga segar pilihan langsung dari kebun terbaik — harum alami, warna cerah, sempurna untuk ungkapan rasa di hari istimewa.</p>
                                    <div class="btn-wrap margin-small">
                                        <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                                            Lihat Koleksi <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Fresh Flowers</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 swiper-slide">
                        <div class="product-item">
                            <div class="image-holder">
                                <img src="<?= $imgPath ?>/Dried%20%26%20Preserved/FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png" alt="Dried & Preserved">
                                <div class="item-info">
                                    <p>Bunga kering dan preserved yang diproses dengan teknik khusus — tampilan elegan, awet berbulan-bulan, dan cocok sebagai dekorasi rumah minimalis.</p>
                                    <div class="btn-wrap margin-small">
                                        <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                                            Lihat Koleksi <i class="icon icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Dried &amp; Preserved</a></h3>
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
</section>


<!-- ===================== KENAPA PILIH D'BLOOM ===================== -->
<section id="why-us" class="scrollspy-section bg-accent padding-xlarge">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 left-column">
                <div class="section-header">
                    <h2 class="section-title">Kenapa Pilih D'Bloom?</h2>
                </div>
                <div class="expertize">
                    <p>Kami hadir untuk membuat setiap momen spesialmu semakin berkesan melalui rangkaian bunga yang cantik, berkualitas, dan penuh perhatian.</p>
                    <ul>
                        <li>
                            <span class="list-number">1.</span>
                            <div class="list-title">
                                <h4>Artificial Awet</h4>
                                <p>Buket tidak layu, kenangan abadi selamanya.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">2.</span>
                            <div class="list-title">
                                <h4>Custom Order</h4>
                                <p>Desain bebas sesuai tema dan warnamu.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">3.</span>
                            <div class="list-title">
                                <h4>Same Day Delivery</h4>
                                <p>Order pagi, terima hari yang sama.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6 right-column">
                <figure class="single-image-holder">
                    <img src="<?= $imgPath ?>/Artificial%20Bouquet/Beautiful_Bouquet____-removebg-preview.png" alt="D'Bloom Bouquet">
                </figure>
            </div>

        </div>
    </div>
</section>


<!-- ===================== READY STOCK ===================== -->
<section id="popular-items" class="herb-items scrollspy-section margin-xlarge">
    <div class="container">

        <div class="section-header">
            <h2 class="section-title">Ready Stock</h2>
        </div>

        <div class="row">

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Dried%20%26%20Preserved/FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png" alt="Florist Choice Dried" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Florist Choice Dried</a></h3>
                        <div class="product-price">Rp 115.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Dried%20%26%20Preserved/download__4_-removebg-preview.png" alt="Dried Wildflower Bouquet" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Dried Wildflower Bouquet</a></h3>
                        <div class="product-price">Rp 100.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Fresh%20Flowers/download-removebg-preview.png" alt="Fresh Rose Bouquet" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Fresh Rose Bouquet</a></h3>
                        <div class="product-price">Rp 120.000</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="product-list">
                    <div class="product-item">
                        <div class="image-holder">
                            <img src="<?= $imgPath ?>/Fresh%20Flowers/download__1_-removebg-preview.png" alt="Mixed Fresh Bouquet" class="image-product">
                            <i class="icon icon-like-button"></i>
                        </div>
                        <div class="product-inner">
                            <a class="add-to-cart" href="https://wa.me/<?= esc($waNumber) ?>?text=Halo+saya+mau+pesan!" target="_blank">
                                <span class="cart-text">Tanya via WA</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="<?= base_url('katalog') ?>">Mixed Fresh Bouquet</a></h3>
                        <div class="product-price">Rp 135.000</div>
                    </div>
                </div>
            </div>

            <div class="col-12 btn-wrap align-center margin-small">
                <a href="<?= base_url('katalog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                    Lihat Semua <i class="icon icon-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- ===================== BLOG ===================== -->
<section id="latest-blog" class="scrollspy-section margin-xlarge">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tips &amp; Inspirasi</h2>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="post-grid">
                    <div class="row">

                        <div class="col-md-4">
                            <article class="post-item">
                                <figure>
                                    <a href="<?= base_url('blog') ?>" class="image-hvr-effect">
                                        <img src="<?= $assetPath ?>/images/post-item15.jpg" alt="Cara Pilih Buket Artificial" class="post-image">
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="<?= base_url('blog') ?>">Cara Pilih Buket Artificial</a>
                                    </h3>
                                    <p>Tips memilih buket artificial yang berkualitas, tahan lama, dan tetap terlihat natural untuk berbagai kesempatan.</p>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4">
                            <article class="post-item">
                                <figure>
                                    <a href="<?= base_url('blog') ?>" class="image-hvr-effect">
                                        <img src="<?= $assetPath ?>/images/post-item16.jpg" alt="Ide Hadiah Wisuda yang Berkesan" class="post-image">
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="<?= base_url('blog') ?>">Ide Hadiah Wisuda yang Berkesan</a>
                                    </h3>
                                    <p>Temukan inspirasi hadiah wisuda terbaik yang akan membuat momen kelulusan semakin tak terlupakan.</p>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-4">
                            <article class="post-item">
                                <figure>
                                    <a href="<?= base_url('blog') ?>" class="image-hvr-effect">
                                        <img src="<?= $assetPath ?>/images/post-item17.jpg" alt="Perawatan Bunga Kering" class="post-image">
                                    </a>
                                </figure>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="<?= base_url('blog') ?>">Perawatan Bunga Kering</a>
                                    </h3>
                                    <p>Panduan lengkap merawat bunga kering agar tetap indah dan awet menghiasi ruanganmu berbulan-bulan.</p>
                                </div>
                            </article>
                        </div>

                        <div class="btn-wrap align-center margin-small">
                            <a href="<?= base_url('blog') ?>" class="btn btn-black btn-xlarge btn-rounded">
                                Baca Semua <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===================== TESTIMONIAL ===================== -->
<section id="testimonial" class="scrollspy-section margin-xlarge">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6 d-none d-md-block">
                <figure class="testimonial-image">
                    <img src="<?= $imgPath ?>/Artificial%20Bouquet/download__2_-removebg-preview.png" alt="D'Bloom Bouquet">
                </figure>
            </div>

            <div class="col-12 col-md-6">
                <div class="section-header">
                    <h2 class="section-title">Kata Pelanggan Kami</h2>
                </div>
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">

                        <div class="testimonial-item swiper-slide">
                            <div class="testimonials-inner">
                                <q>Buketnya cantik banget dan awet! Saya beli untuk wisuda dan semua teman-teman pada kagum. Pengirimannya juga tepat waktu, sangat memuaskan!</q>
                                <div class="testimonial-author">
                                    <div class="author-detail">
                                        <div class="name">Siti Rahayu</div>
                                        <div class="author-title">Pelanggan Wisuda</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <div class="testimonials-inner">
                                <q>Custom order sangat mudah dan hasilnya persis seperti yang saya minta. Buket anniversary-nya romantis sekali, pasangan saya langsung suka!</q>
                                <div class="testimonial-author">
                                    <div class="author-detail">
                                        <div class="name">Anisa Putri</div>
                                        <div class="author-title">Pelanggan Anniversary</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-item swiper-slide">
                            <div class="testimonials-inner">
                                <q>Pesan pagi langsung terima sore hari! Buket ulang tahunnya keren, teman saya sampai nanya belinya di mana. Pasti order lagi di D'Bloom!</q>
                                <div class="testimonial-author">
                                    <div class="author-detail">
                                        <div class="name">Budi Santoso</div>
                                        <div class="author-title">Pelanggan Ulang Tahun</div>
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


<!-- ===================== SERVICES ===================== -->
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
                        <p>Desain sesuai keinginan</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="services-item">
                    <i class="icon icon-guarantee"></i>
                    <div class="services-content">
                        <div class="services-title">Kualitas Terjamin</div>
                        <p>Buket artificial awet</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="services-item">
                    <i class="icon icon-price-tag"></i>
                    <div class="services-content">
                        <div class="services-title">Harga Terjangkau</div>
                        <p>Mulai Rp 75.000</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?= $this->endSection() ?>
