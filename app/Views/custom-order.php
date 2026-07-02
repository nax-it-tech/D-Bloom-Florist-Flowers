<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php
$assetPath = $assetPath ?? base_url('aseets/plantly-free-version/plantly-free-version');
$imgPath   = $imgPath   ?? base_url('img');
$waNumber  = $waNumber  ?? '6288218247268';
?>

<button id="scroll-up"><i class="icon icon-arrow-up"></i></button>

<!-- Form Custom Order -->
<section id="why-us" class="scrollspy-section first-section bg-accent padding-xlarge">
  <div class="container">
    <div class="row">

      <!-- Form -->
      <div class="col-12 col-md-6 left-column">
        <div class="section-header">
          <h2 class="section-title">Custom Order</h2>
        </div>
        <p>Ceritakan impian bouquet kamu kepada kami. Kami akan wujudkan sesuai tema, warna, dan budgetmu.</p>

        <form id="customOrderForm" onsubmit="kirimWA(event)" class="mt-3"
              style="border: 1.5px solid #d0d0d0; border-radius: 12px; padding: 28px; background: #fff;">

          <div class="mb-3">
            <label for="co_nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="co_nama"
                   placeholder="Nama lengkap kamu" required>
          </div>

          <div class="mb-3">
            <label for="co_tema" class="form-label">Tema Bouquet</label>
            <input type="text" class="form-control" id="co_tema"
                   placeholder="Contoh: Wisuda Pink, Anniversary Elegan">
          </div>

          <div class="row mb-3">
            <div class="col">
              <label for="co_wrapping" class="form-label">Warna Wrapping</label>
              <select class="form-control" id="co_wrapping">
                <option value="">Pilih warna</option>
                <option>Pink</option>
                <option>Putih</option>
                <option>Hijau Sage</option>
                <option>Ungu</option>
                <option>Custom</option>
              </select>
            </div>
            <div class="col">
              <label for="co_budget" class="form-label">Budget</label>
              <select class="form-control" id="co_budget">
                <option value="">Pilih budget</option>
                <option>Di bawah Rp 100.000</option>
                <option>Rp 100.000 - 200.000</option>
                <option>Rp 200.000 - 350.000</option>
                <option>Di atas Rp 350.000</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label for="co_tanggal" class="form-label">Tanggal Pengiriman</label>
            <input type="date" class="form-control" id="co_tanggal">
          </div>

          <div class="mb-3">
            <label for="co_catatan" class="form-label">Catatan Tambahan</label>
            <textarea class="form-control" id="co_catatan" rows="3"
                      placeholder="Isi tambahan (snack, uang), warna spesifik, pesan, dll"></textarea>
          </div>

          <div class="btn-wrap">
            <button type="submit" class="btn btn-black btn-xlarge btn-rounded">
              Kirim via WhatsApp <i class="icon icon-arrow-right"></i>
            </button>
          </div>

        </form>
      </div>

      <!-- Gambar -->
      <div class="col-12 col-md-6 right-column d-none d-md-flex" style="flex-direction:column; align-items:center; justify-content:center;">
        <div class="section-header" style="text-align:center; width:100%;">
          <h2 class="section-title">Contoh Desain</h2>
        </div>
        <figure class="single-image-holder" style="text-align:center; width:100%;">
          <img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/Beautiful_Bouquet____-removebg-preview.png"
               alt="Contoh Custom Order" style="max-width:100%; margin:0 auto; display:block;">
        </figure>
      </div>

    </div>
  </div>
</section>

<!-- Contoh koleksi -->
<section id="collection" class="scrollspy-section margin-xlarge">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Inspirasi Custom Order</h2>
		</div>

		<div class="swiper collection-swiper">
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/download__1_-removebg-preview.png" alt="Custom Wisuda">
							<div class="item-info">
								<p>Bouquet custom tema wisuda dengan warna pastel pink dan wrapping putih elegan. Bisa ditambah nama dan pesan spesial.</p>
								<div class="btn-wrap margin-small">
									<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%2C%20saya%20mau%20custom%20tema%20wisuda!"
									   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
										Pesan Ini <i class="icon icon-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="#">Tema Wisuda Pink</a></h3>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Artificial%20Bouquet/download__2_-removebg-preview.png" alt="Custom Anniversary">
							<div class="item-info">
								<p>Bouquet romantic untuk anniversary dengan warna merah dan putih. Bisa ditambah chocolat atau uang sebagai isi.</p>
								<div class="btn-wrap margin-small">
									<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%2C%20saya%20mau%20custom%20tema%20anniversary!"
									   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
										Pesan Ini <i class="icon icon-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="#">Tema Anniversary Elegan</a></h3>
						</div>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="product-item">
						<div class="image-holder">
							<img src="<?= esc($imgPath) ?>/Dried%20%26%20Preserved/FLORIST_CHOICE_DRIED_FLOWER_BOUQUET-removebg-preview.png" alt="Custom Dried">
							<div class="item-info">
								<p>Bouquet dried flowers yang awet abadi. Cocok untuk kenang-kenangan, dekorasi rumah, atau hadiah unik yang berkesan.</p>
								<div class="btn-wrap margin-small">
									<a href="https://wa.me/<?= esc($waNumber) ?>?text=Halo%2C%20saya%20mau%20custom%20dried%20flowers!"
									   target="_blank" class="btn btn-black btn-xlarge btn-rounded">
										Pesan Ini <i class="icon icon-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title"><a href="#">Dried Flowers Abadi</a></h3>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Arrow di luar swiper agar tidak nabrak form -->
		<div class="button-container">
			<div class="swiper-button-prev icon icon-arrow-left collection-prev"></div>
			<div class="swiper-button-next icon icon-arrow-right collection-next"></div>
		</div>

	</div>
</section>

<script>
function kirimWA(e) {
	e.preventDefault();
	var nama     = document.getElementById('co_nama').value;
	var tema     = document.getElementById('co_tema').value;
	var wrapping = document.getElementById('co_wrapping').value;
	var budget   = document.getElementById('co_budget').value;
	var tanggal  = document.getElementById('co_tanggal').value;
	var catatan  = document.getElementById('co_catatan').value;
	var msg = "Halo D'Bloom Florist! Saya ingin Custom Order:\n\n"
	        + "Nama: " + nama + "\n"
	        + "Tema: " + tema + "\n"
	        + "Wrapping: " + wrapping + "\n"
	        + "Budget: " + budget + "\n"
	        + "Tanggal: " + tanggal + "\n"
	        + "Catatan: " + catatan;
	window.open('https://wa.me/<?= esc($waNumber) ?>?text=' + encodeURIComponent(msg), '_blank');
}
</script>

<?= $this->endSection() ?>
