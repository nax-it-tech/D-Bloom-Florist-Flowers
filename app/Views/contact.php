<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php $waNumber = $waNumber ?? '6288218247268'; ?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Maps Full Lebar seperti Hero -->
<div style="width:100%; height:480px; position:relative; overflow:hidden; margin-top:0;">
    <iframe
        src="https://maps.google.com/maps?q=https://maps.app.goo.gl/nghsdKhgZVeHHX969&output=embed"
        width="100%" height="100%"
        style="border:0; display:block;"
        allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <!-- Overlay link buka di Google Maps -->
   
</div>

<!-- Info Kontak -->
<section id="about" class="scrollspy-section margin-xlarge">
    <div class="container">
        <div class="row">
            <div class="col-md-6 video-content">
                <div class="section-header">
                    <h2 class="section-title">Temukan Kami</h2>
                </div>
                <div class="description">
                    <ul style="padding:0;">
                        <li style="margin-bottom:16px;">
                            <strong>Alamat</strong><br>
                            <span style="color:#666;">[Alamat lengkap D'Bloom Florist]</span>
                        </li>
                        <li style="margin-bottom:16px;">
                            <strong>WhatsApp</strong><br>
                            <a href="https://wa.me/<?= esc($waNumber) ?>" target="_blank" style="color:#A8B5A2;font-weight:600;">
                                +<?= esc($waNumber) ?>
                            </a>
                        </li>
                        <li style="margin-bottom:16px;">
                            <strong>Instagram</strong><br>
                            <a href="https://www.instagram.com/dbloom_florist/" target="_blank" style="color:#A8B5A2;font-weight:600;">
                                @dbloom_florist
                            </a>
                        </li>
                        <li style="margin-bottom:16px;">
                            <strong>Jam Operasional</strong><br>
                            <span style="color:#666;">Senin – Sabtu: 08.00 – 21.00 WIB<br>Minggu: 09.00 – 18.00 WIB</span>
                        </li>
                        <li>
                            <strong>Same Day Order</strong><br>
                            <span style="color:#666;">Pesan sebelum jam 12.00 WIB</span>
                        </li>
                    </ul>
                    <div class="btn-wrap">
                        <a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%20D'Bloom%20Florist!"
                           target="_blank" class="btn btn-black btn-xlarge btn-rounded">
                            Chat WhatsApp <i class="icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 description">
                <div class="section-header">
                    <h2 class="section-title">Kirim Pesan</h2>
                </div>
                <form action="<?= base_url('kontak') ?>" method="POST"
                      style="border:1.5px solid #d0d0d0;border-radius:12px;padding:28px;background:#fff;">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap kamu" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="tel" name="wa" class="form-control" placeholder="08xxxxxxxxxx" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keperluan</label>
                        <select name="keperluan" class="form-control">
                            <option>Tanya Produk</option>
                            <option>Custom Order</option>
                            <option>Cek Harga</option>
                            <option>Komplain / Saran</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="4"
                                  placeholder="Tulis pesanmu di sini..." required></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button type="submit" class="btn btn-black btn-xlarge btn-rounded">
                            Kirim Pesan <i class="icon icon-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="why-us" class="scrollspy-section bg-accent padding-xlarge">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-column">
                <div class="section-header">
                    <h2 class="section-title">FAQ</h2>
                </div>
                <div class="expertize">
                    <ul>
                        <li>
                            <span class="list-number">1.</span>
                            <div class="list-title">
                                <h4>Apakah ada Same Day Delivery?</h4>
                                <p>Ya! Order sebelum jam 12.00 WIB untuk pengiriman hari yang sama di area tertentu.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">2.</span>
                            <div class="list-title">
                                <h4>Cara pesan custom bouquet?</h4>
                                <p>Chat WA atau isi form Custom Order, diskusikan tema, warna, dan budget kamu.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">3.</span>
                            <div class="list-title">
                                <h4>Berapa lama buket artificial bertahan?</h4>
                                <p>Seumur hidup jika dirawat dengan baik dan dijauhkan dari sinar matahari langsung.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 right-column">
                <div class="expertize" style="padding-top:60px;">
                    <ul>
                        <li>
                            <span class="list-number">4.</span>
                            <div class="list-title">
                                <h4>Minimal order custom berapa?</h4>
                                <p>Tidak ada minimal order, budget mulai dari Rp 75.000.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">5.</span>
                            <div class="list-title">
                                <h4>Apakah bisa kirim ke luar kota?</h4>
                                <p>Bisa untuk buket artificial dan dried flowers via ekspedisi.</p>
                            </div>
                        </li>
                        <li>
                            <span class="list-number">6.</span>
                            <div class="list-title">
                                <h4>Berapa lama proses custom order?</h4>
                                <p>1–2 hari kerja, tergantung kompleksitas desain dan ketersediaan bahan.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="services-item">
                    <i class="icon icon-shopping-cart"></i>
                    <div class="services-content">
                        <div class="services-title">Same Day Order</div>
                        <p>Pesan pagi, terima hari ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services-item">
                    <i class="icon icon-secure"></i>
                    <div class="services-content">
                        <div class="services-title">Custom Order</div>
                        <p>Desain sesuai keinginanmu</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services-item">
                    <i class="icon icon-guarantee"></i>
                    <div class="services-content">
                        <div class="services-title">Kualitas Terjamin</div>
                        <p>Buket artificial awet selamanya</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
