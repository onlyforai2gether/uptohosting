<!-- HERO SCROLLYTELLING BANNER -->
<section class="scrolly-banner" id="scrollyBanner">
    <!-- PRELOADER -->
    <div id="scrollyPreloader" class="scrolly-preloader">
        <div class="scrolly-spinner"></div>
        <p>Loading Experience... <span id="scrollyProgress">0</span>%</p>
    </div>
    
    <div class="scrolly-sticky">
        <canvas id="heroCanvas"></canvas>
        
        <div class="scrolly-text-overlay hero-split" id="textOverlay0">
            <h1 class="hero-banner-title">Pesan Pizza Favoritmu<br><span>Tanpa Antri!</span></h1>
            <p class="hero-banner-desc">Pilih menu, tambahkan topping, dan checkout langsung dari HP kamu. Cepat, mudah, dan pastinya nikmat.</p>
        </div>
        
        <div class="scrolly-text-overlay text-left" id="textOverlay1">
            <h2 class="scrolly-slogan">Dibuat dengan Bahan Segar</h2>
        </div>
        
        <div class="scrolly-text-overlay text-right" id="textOverlay2">
            <h2 class="scrolly-slogan">Dipanggang Sempurna untuk Anda</h2>
        </div>
        
        <div class="scrolly-text-overlay" id="textOverlay3">
            <h2 class="scrolly-slogan mb-4">Mulai Pesan Sekarang</h2>
            <button class="hero-btn-primary" onclick="document.querySelector('.menu-section').scrollIntoView({behavior:'smooth'})">Pesan Sekarang</button>
        </div>
    </div>
</section>

<!-- BEST SELLERS -->
<section class="bestseller-section">
    <h2 class="section-heading" style="color: var(--accent);"><span style="font-size: 24px;">🔥</span> Top 3 Menu Terlaris</h2>
    <div class="bestseller-grid" id="bestsellerGrid">
        <!-- JS RENDER -->
    </div>
</section>

<!-- MENU GRID -->
<section class="menu-section">
    <h2 class="section-heading">Menu Kami</h2>
    <div class="menu-grid" id="menuGrid">
        <div class="loading-state"><div class="spinner"></div><p>Memuat menu...</p></div>
    </div>
</section>

<!-- ABOUT & LOCATION -->
<section class="about-section">
    <div class="about-inner">
        <div class="about-copy">
            <div class="about-brand">
                <img src="<?= base_url('images/logo.webp') ?>" alt="Pizza Azura Logo" class="about-logo">
                <h2 class="section-heading">Tentang Pizza Azura</h2>
            </div>
            <div id="aboutContent">
                <p>Pizza Azura hadir untuk memberi pengalaman pesan pizza tanpa ribet: langsung dari HP, tanpa antre, dan dengan rasa yang selalu konsisten. Kami memilih bahan terbaik — keju berkualitas, saus rahasia, dan topping premium — lalu memanggang setiap pesanan dengan perhatian ekstra sehingga setiap gigitan terasa lezat dan memuaskan.</p>
                <p>Selain menu klasik favorit keluarga, kami juga menawarkan variasi pizza kekinian dengan kombinasi topping unik yang pas untuk semua suasana. Inilah cara baru menikmati pizza: praktis, cepat, dan tetap terjaga kualitasnya.</p>
                <p>Pizza Azura dibuat untuk siapa saja yang ingin makan enak tanpa perlu keluar rumah. Dari pesanan antar cepat hingga pickup langsung di lokasi, kami hadir untuk memanjakan selera Anda di setiap momen special.</p>
            </div>
        </div>
        <div class="about-card">
            <h3>📍 Lokasi Kami</h3>
            <p>Klik peta untuk <b>tag lokasi pengiriman Anda</b> dan lihat jarak ke Pizza Azura. Gunakan tombol layer untuk mengganti tampilan peta!</p>
            <div class="map-frame-wrap" style="position: relative;">
                <div id="map" style="width: 100%; height: 280px; z-index: 1;"></div>
            </div>
        </div>
    </div>
</section>
