<?php
/**
 * View: Home Index
 * * Halaman pendaratan (landing page) utama untuk aplikasi Genhowa.
 * File ini bertanggung jawab menampilkan konten utama yang dikirim
 * dari controller Home.
 * * Dependencies:
 * - style.css (untuk class .hero, .features, .feature-card)
 * - script.js (untuk interaksi tombol ctaButton)
 */
?>

<div class="hero">
    <div class="container">
        <h1 class="hero-title"><?= $data['judul']; ?></h1>
        
        <p class="hero-subtitle"><?= $data['deskripsi']; ?></p>
        
        <button id="ctaButton" class="btn-primary">Mulai Sekarang</button>
    </div>
</div>

<div class="container">
    <div class="features">
        <div class="feature-card">
            <h3>Ringan & Cepat</h3>
            <p>Dibangun di atas arsitektur MVC sederhana tanpa overhead framework besar.</p>
        </div>
        
        <div class="feature-card">
            <h3>Terstruktur</h3>
            <p>Pemisahan logika bisnis, data, dan tampilan untuk pengembangan yang rapi.</p>
        </div>
        
        <div class="feature-card">
            <h3>Siap Dikembangkan</h3>
            <p>Fondasi yang solid untuk menambahkan fitur-fitur kompleks selanjutnya.</p>
        </div>
    </div>
</div>