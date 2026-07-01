<?php

namespace App\Controllers;

class Pages extends BaseController
{
    /** Data dasar yang di-share ke semua view */
    private function baseData(string $title): array
    {
        return [
            'title'     => $title,
            'imgPath'   => base_url('img'),
            'assetPath' => base_url('aseets/plantly-free-version/plantly-free-version'),
            'waNumber'  => '6288218247268',
        ];
    }

    // GET /tentang-kami
    public function about(): string
    {
        return view('about', $this->baseData("Tentang Kami"));
    }

    // GET /katalog
    public function shop(): string
    {
        return view('shop', $this->baseData("Katalog Produk"));
    }

    // GET /custom-order
    public function customOrder(): string
    {
        return view('custom-order', $this->baseData("Custom Order"));
    }

    // POST /custom-order
    public function customOrderSubmit()
    {
        // Validasi minimal
        $rules = [
            'nama'     => 'required|min_length[2]',
            'tanggal'  => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Build WA message dari form data
        $nama      = $this->request->getPost('nama');
        $tema      = $this->request->getPost('tema');
        $wrapping  = $this->request->getPost('wrapping');
        $budget    = $this->request->getPost('budget');
        $tanggal   = $this->request->getPost('tanggal');
        $catatan   = $this->request->getPost('catatan');
        $isi       = (array) $this->request->getPost('isi');

        $msg  = "Halo D'Bloom Florist! Saya ingin Custom Order:\n\n";
        $msg .= "Nama: {$nama}\n";
        $msg .= "Tema: {$tema}\n";
        $msg .= "Warna Wrapping: {$wrapping}\n";
        $msg .= "Budget: {$budget}\n";
        $msg .= "Isi Tambahan: " . implode(', ', $isi) . "\n";
        $msg .= "Tanggal Pengiriman: {$tanggal}\n";
        $msg .= "Catatan: {$catatan}";

        $waNumber = '6288218247268';
        $waUrl    = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($msg);

        return redirect()->to($waUrl);
    }

    // GET /gallery
    public function gallery(): string
    {
        return view('gallery', $this->baseData("Gallery"));
    }

    // GET /testimoni
    public function testimonials(): string
    {
        return view('testimonials', $this->baseData("Testimoni Pelanggan"));
    }

    // GET /kontak
    public function contact(): string
    {
        return view('contact', $this->baseData("Kontak & Lokasi"));
    }

    // POST /kontak
    public function contactSubmit()
    {
        $rules = [
            'nama'  => 'required|min_length[2]',
            'wa'    => 'required',
            'pesan' => 'required|min_length[10]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $nama      = $this->request->getPost('nama');
        $wa        = $this->request->getPost('wa');
        $keperluan = $this->request->getPost('keperluan');
        $pesan     = $this->request->getPost('pesan');

        $msg  = "Halo D'Bloom Florist!\n\n";
        $msg .= "Nama: {$nama}\n";
        $msg .= "WA: {$wa}\n";
        $msg .= "Keperluan: {$keperluan}\n\n";
        $msg .= "Pesan:\n{$pesan}";

        $waNumber = '6288218247268';
        $waUrl    = 'https://wa.me/' . $waNumber . '?text=' . rawurlencode($msg);

        return redirect()->to($waUrl);
    }

    // GET /blog
    public function blog(): string
    {
        return view('blog', $this->baseData("Blog & Tips"));
    }

    // GET /blog/{slug}
    public function blogPost(string $slug): string
    {
        // Placeholder – bisa diganti dengan data dari database nanti
        $posts = [
            'cara-pilih-buket-artificial' => [
                'judul'   => 'Cara Pilih Buket Artificial yang Berkualitas',
                'isi'     => '<p>Artikel lengkap akan segera hadir. Hubungi kami untuk konsultasi langsung!</p>',
                'tanggal' => '25 Jun 2025',
            ],
            'ide-hadiah-wisuda' => [
                'judul'   => 'Ide Hadiah Wisuda yang Berkesan & Awet',
                'isi'     => '<p>Artikel lengkap akan segera hadir. Hubungi kami untuk konsultasi langsung!</p>',
                'tanggal' => '18 Jun 2025',
            ],
            'perawatan-bunga-kering' => [
                'judul'   => 'Perawatan Bunga Kering agar Tetap Cantik',
                'isi'     => '<p>Artikel lengkap akan segera hadir. Hubungi kami untuk konsultasi langsung!</p>',
                'tanggal' => '10 Jun 2025',
            ],
        ];

        if (! isset($posts[$slug])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Artikel '{$slug}' tidak ditemukan.");
        }

        $data = $this->baseData($posts[$slug]['judul']);
        $data['post'] = $posts[$slug];

        return view('blog-post', $data);
    }
}
