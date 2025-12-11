<?php
/**
 * View: Home Index
 * * Halaman utama Triverse.
 * * Update: Penambahan kartu Wuthering Waves dan penyesuaian teks Hero.
 */
?>

<div class="hero">
    <div class="container">
        <div class="hero-wrapper">
            
            <div class="hero-content">
                <h1 class="hero-title">
                    Jelajahi Tiga<br>
                    Dimensi Berbeda.
                </h1>
                
                <p class="hero-subtitle">
                    Tracking progress Genshin Impact, Honkai: Star Rail, dan Wuthering Waves 
                    dalam satu dashboard yang terintegrasi.
                </p>
            </div>

            <div class="hero-image">
                <img src="https://i.imgur.com/k0spfIR.jpeg" alt="Triverse Dashboard Illustration">
            </div>

        </div>
    </div>
</div>

<div class="game-section">
    <div class="container">
        <div class="game-grid">
            
            <a href="<?= BASEURL; ?>/genshin" class="game-card">
                <img src="https://i.imgur.com/dvdXOmD.png" class="game-logo" alt="Genshin Impact">
                <h3>Genshin Impact</h3>
                <span>Tracking Artefak & Pity</span>
            </a>

            <a href="<?= BASEURL; ?>/starrail" class="game-card">
                <img src="https://i.imgur.com/MqeTVB0.png" class="game-logo" alt="Honkai: Star Rail">
                <h3>Honkai: Star Rail</h3>
                <span>Tracking Relic & Warps</span>
            </a>

            <a href="<?= BASEURL; ?>/wuwa" class="game-card">
                <img src="https://upload.wikimedia.org/wikipedia/en/2/23/Wuthering_Waves.png" class="game-logo" alt="Wuthering Waves">
                <h3>Wuthering Waves</h3>
                <span>Tracking Echoes & Convenes</span>
            </a>

        </div>
    </div>
</div>