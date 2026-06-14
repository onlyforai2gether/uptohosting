# 🎯 ADMIN PAGES DEPLOYMENT GUIDE

## ✅ Files Successfully Pushed to GitHub

Berikut file admin yang sudah berhasil di-push ke repo `uptohosting`:

1. **admin-login.html** - Halaman login admin dengan desain mockup
2. **admin.html** - Dashboard admin utama (orders, menu, settings)
3. **admin-settings.html** - Halaman pengaturan toko standalone
4. **admin-settings-form.html** - Form pengaturan tambahan
5. **images/logo.svg** - Logo Pizza Azura untuk admin pages

---

## 🚀 LANGKAH DEPLOY KE CPANEL

### Opsi 1: Git Pull (Otomatis via cPanel)

1. Login ke cPanel Jagoan Hosting
2. Buka **Git Version Control**
3. Klik **Manage** pada repo `uptohosting`
4. Klik tombol **Pull or Deploy** → **Update from Remote**
5. Tunggu sampai selesai (lebih cepat karena hanya 5 file kecil)

### Opsi 2: Manual Upload (Lebih Cepat)

1. Login ke cPanel → **File Manager**
2. Masuk ke `/home/pizzaazu/public_html/`
3. Upload 4 file HTML ke root:
   - `admin-login.html`
   - `admin.html`
   - `admin-settings.html`
   - `admin-settings-form.html`
4. Upload `logo.svg` ke folder `images/`

---

## 🌐 TESTING ADMIN PAGES

Setelah upload selesai, test halaman admin:

### 1. Halaman Login Admin
**URL:** https://pizzaazura.my.id/admin-login.html

- Masukkan username dan password admin
- Klik tombol **Masuk**
- Jika berhasil, akan redirect ke dashboard admin

### 2. Dashboard Admin (Setelah Login)
**URL:** https://pizzaazura.my.id/admin.html

Fitur yang tersedia:
- **Antrean Pesanan** - Lihat dan kelola pesanan customer
- **Kelola Menu Pizza** - Tambah, edit, hapus menu pizza
- **Pengaturan Toko** - Update slogan, jam operasional, kontak, WebGIS lokasi
- **Export Data** - Export pesanan ke Excel/PDF

### 3. Standalone Settings Page
**URL:** https://pizzaazura.my.id/admin-settings.html

---

## 🔗 INTEGRASI DENGAN RAILWAY API

Semua admin pages sudah terintegrasi dengan Railway API via **api-helper.js** yang sudah ada di footer.

**Railway API URL:** `https://uploadtorailway-production.up.railway.app`

Endpoint yang digunakan:
- `POST /api/auth/login` - Login admin
- `GET /api/orders` - Get all orders
- `GET /api/menu` - Get all menu items
- `POST /api/menu` - Add new menu
- `PUT /api/menu/:id` - Update menu
- `DELETE /api/menu/:id` - Delete menu
- `GET /api/settings` - Get all settings
- `PUT /api/settings` - Update settings
- `GET /api/export/excel` - Export orders to Excel
- `GET /api/export/pdf` - Export orders to PDF

---

## 📝 CATATAN PENTING

### Admin Login Credentials
Pastikan sudah ada user admin di database MySQL (`pizzaazu_ra`).

Jika belum ada, buat user admin via SQL:
```sql
INSERT INTO users (username, password, role) 
VALUES ('admin', MD5('password123'), 'admin');
```

### URL Access
Karena admin pages adalah static HTML, ada 2 cara akses:

1. **Langsung via filename:**
   - `https://pizzaazura.my.id/admin-login.html`
   - `https://pizzaazura.my.id/admin.html`

2. **Optional: Setup redirect `/admin` → `/admin.html`**
   Edit `.htaccess` tambahkan:
   ```apache
   RewriteRule ^admin$ /admin-login.html [L]
   RewriteRule ^admin/dashboard$ /admin.html [L]
   ```

### API Calls
Semua API calls otomatis diredirect ke Railway via `api-helper.js` yang sudah di-include di footer masing-masing halaman admin.

---

## 🛠️ TROUBLESHOOTING

### CSS Tidak Muncul
Pastikan file berikut ada di server:
- `/home/pizzaazu/public_html/css/admin.css`

### API Error / Not Connected
1. Cek Railway backend masih running: `https://uploadtorailway-production.up.railway.app/api/menu`
2. Cek browser console (F12) untuk error messages
3. Pastikan CORS sudah enabled di Railway server untuk domain `pizzaazura.my.id`

### Login Gagal
1. Cek database connection di Railway (environment variables)
2. Cek tabel `users` ada di database `pizzaazu_ra`
3. Test login credentials langsung via Railway API

---

## 📦 FILES EXCLUDED FROM GIT

File-file besar berikut **TIDAK** di-push ke GitHub (sudah ditambahkan ke `.gitignore`):

- `assets_upload.tar.gz` (besar, tidak diperlukan)
- `public/pizza2.zip` (22 MB animation frames)
- `images/pizza2/` folder (240+ webp files)

**Catatan:** Pizza2 folder sudah di-upload manual ke cPanel sebelumnya, jadi tidak perlu upload lagi.

---

## ✨ NEXT STEPS

1. ✅ Pull/upload admin files ke cPanel
2. ✅ Test login admin: `https://pizzaazura.my.id/admin-login.html`
3. ✅ Test dashboard: `https://pizzaazura.my.id/admin.html`
4. ✅ Test CRUD menu pizza
5. ✅ Test pengaturan toko (settings)
6. ✅ Test export orders (Excel/PDF)
7. ⚙️ Optional: Setup redirect `/admin` → `/admin-login.html` di `.htaccess`

---

**Deployment Status:** ✅ Ready to Deploy
**Last Updated:** June 15, 2026
**Repo:** https://github.com/onlyforai2gether/uptohosting
