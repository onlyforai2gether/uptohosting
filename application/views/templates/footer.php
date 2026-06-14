<!-- FOOTER -->
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-brand">
            <a href="<?= base_url() ?>" class="logo">
                <img src="<?= base_url('images/logo.webp') ?>" alt="Pizza Azura" class="logo-img">
            </a>
            <p id="footerSlogan">Pesan pizza favoritmu secara digital. Cepat, mudah, dan nikmat tanpa perlu antri panjang.</p>
            <div class="footer-socials">
                <a href="#" aria-label="Facebook" id="footerFbLink" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>
                <a href="https://www.instagram.com/pizzaazzura?igsh=MW9zcmtnNDAwdzlheQ==" aria-label="Instagram" id="footerIgLink" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="https://vt.tiktok.com/ZS9v7FKmt/" aria-label="TikTok" id="footerTtLink" target="_blank" rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="footer-links">
            <h3>Jam Operasional</h3>
            <ul>
                <li id="footerOpWeekday">Senin - Jumat: 10.00 - 22.00</li>
                <li id="footerOpWeekend">Sabtu - Minggu: 11.00 - 23.00</li>
                <li id="footerOpHoliday">Libur Nasional: Buka</li>
            </ul>
        </div>
        <div class="footer-links">
            <h3>Hubungi Kami</h3>
            <ul>
                <li id="footerAddress">📍 Jl. Sudirman No. 123, Jakarta</li>
                <li id="footerPhone">📞 +62 851-9804-2502</li>
                <li id="footerEmail">✉️ hello@pizzaazura.com</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2026 Pizza Azura. All rights reserved.</p>
    </div>
</footer>

<!-- DETAIL MODAL -->
<div class="modal-overlay" id="detailModal">
    <div class="modal">
        <div class="modal-header"><h2>Detail Menu</h2><button class="modal-close" onclick="closeModal('detailModal')">&times;</button></div>
        <div id="detailContent"></div>
    </div>
</div>

<!-- CART MODAL -->
<div class="modal-overlay" id="cartModal">
    <div class="modal">
        <div class="modal-header"><h2>🛒 Keranjang</h2><button class="modal-close" onclick="closeModal('cartModal')">&times;</button></div>
        <div id="cartContent"></div>
    </div>
</div>

<!-- CHECKOUT MODAL -->
<div class="modal-overlay" id="checkoutModal">
    <div class="modal">
        <div class="modal-header"><h2>📋 Checkout</h2><button class="modal-close" onclick="closeModal('checkoutModal')">&times;</button></div>
        <div id="checkoutContent"></div>
    </div>
</div>

<!-- SUCCESS MODAL -->
<div class="modal-overlay" id="successModal">
    <div class="modal success-modal">
        <div id="successContent"></div>
    </div>
</div>

<!-- FLOATING CART BUTTON -->
<button class="floating-cart-btn" id="floatingCartBtn" onclick="openCart()" title="Keranjang Belanja">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2.2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
    <span class="cart-badge" id="floatingCartBadge">0</span>
</button>

<div class="toast" id="toast"></div>
<script>
    window.siteUrl = '<?= site_url() ?>';
</script>
<script src="<?= base_url('js/api-helper.js') ?>"></script>
<script src="<?= base_url('js/app.js?v=3.1') ?>"></script>
<script src="<?= base_url('js/scroll.js?v=3.1') ?>"></script>

</body>
</html>