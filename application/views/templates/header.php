<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pizza Azura — Pesan pizza favorit Anda secara digital. Freshly Baked Est.2020">
    <script>
        (function(){
            try {
                localStorage.setItem('pizzaAzura_theme', 'dark');
                document.documentElement.setAttribute('data-theme', 'dark');
            } catch (e) {}
        })();
    </script>
    <title><?= isset($title) ? $title.' | Pizza Azura' : 'Pizza Azura — Digital Ordering' ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="icon" href="<?= base_url('images/logo.webp') ?>" type="image/webp">
</head>
<body>

<!-- PIZZA BG DECORATIONS -->
<div class="pizza-deco deco-1">🍕</div>
<div class="pizza-deco deco-2">🧀</div>
<div class="pizza-deco deco-3">🌶️</div>

<!-- HEADER -->
<header class="header">
    <div class="header-inner">
        <a href="<?= base_url() ?>" class="logo">
            <img src="<?= base_url('images/logo.webp') ?>" alt="Pizza Azura" class="logo-img" style="background-color: #000000; border-radius: 8px; padding: 4px; display: block;">
        </a>
        <div class="nav-links" style="display: flex; align-items: center; gap: 12px;">
            <a href="#menuGrid" class="nav-pill-btn">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                <span class="nav-text">Menu</span>
            </a>
            <a href="#aboutContent" class="nav-pill-btn">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                <span class="nav-text">Lokasi</span>
            </a>
            <button class="cart-btn cart-icon-btn" id="openCartBtn" onclick="openCart()" title="Keranjang">
                <svg viewBox="0 0 24 24" width="22" height="22" stroke="currentColor" stroke-width="2.2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <span class="cart-badge" id="cartBadge">0</span>
            </button>
        </div>
    </div>
</header>