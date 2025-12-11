<?php

/**
 * Class Home
 * * Controller default untuk halaman utama (Landing Page).
 * * Menangani logika tampilan awal aplikasi Triverse.
 */
class Home extends Controller {
    
    /**
     * Method index (default page).
     * * Memuat view header, index (landing), dan footer.
     */
    public function index() {
        // Data yang dikirim ke View
        $data['judul'] = 'Triverse - Dashboard';
        $data['deskripsi'] = 'Kelola progress tiga dunia: Genshin, Star Rail, dan Wuthering Waves.';
        
        // Memanggil struktur views
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}