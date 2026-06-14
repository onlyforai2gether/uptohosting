# 📤 PANDUAN UPLOAD KE SHARED HOSTING

## 🎯 Domain: https://pizzaazura.my.id

---

## ✅ FILE YANG SUDAH SIAP PRODUCTION:

Semua konfigurasi sudah di-update:
- ✅ `application/config/config.php` → Base URL: https://pizzaazura.my.id/
- ✅ `application/config/database.php` → MySQL: 101.50.1.123
- ✅ `.htaccess` → Root domain setup
- ✅ `public/js/api-helper.js` → Auto-redirect API ke Railway

---

## 📂 STRUKTUR UPLOAD:

Upload ke **cPanel File Manager** → `public_html/`

```
public_html/
├── application/         ✅ Upload
├── system/              ✅ Upload
├── public/              ✅ Upload (rename jadi assets/ atau langsung ke root)
├── index.php            ✅ Upload
├── .htaccess            ✅ Upload
```

---

## 📤 CARA UPLOAD via cPanel:

### **1. Login cPanel Jagoan Hosting**
- URL: https://cpanel.jagoanhosting.com (atau sesuai email)
- Username & Password dari email welcome

### **2. Buka File Manager**
- cPanel → **File Manager**
- Pilih **public_html/**
- Klik **Upload** (pojok kanan atas)

### **3. Upload Files/Folders**

**Option A - Upload Folder by Folder:**
1. Upload folder `application/` → tunggu selesai
2. Upload folder `system/` → tunggu selesai
3. Upload folder `public/` → tunggu selesai
4. Upload file `index.php`
5. Upload file `.htaccess`

**Option B - Upload ZIP (Lebih Cepat):**
1. Compress folder `application/`, `system/`, dll jadi **pizzaazura.zip**
2. Upload **pizzaazura.zip** ke `public_html/`
3. Klik kanan file ZIP → **Extract**
4. Hapus file ZIP setelah extract

---

## 🔧 SETELAH UPLOAD:

### **1. Set Folder Permissions**

Via File Manager, set permission (chmod):
- `application/cache/` → **777** (Writable)
- `application/logs/` → **777** (Writable)

Cara:
1. Klik kanan folder
2. **Change Permissions**
3. Centang semua checkbox atau isi: **777**
4. Centang **"Recurse into subdirectories"**
5. **Change Permissions**

### **2. Inject API Helper ke HTML Files**

Tambahkan script ini di **SEMUA file HTML** yang pakai API:

**File yang perlu diedit:**
- `public/admin-login.html`
- `public/admin.html`
- `public/admin-settings.html`
- `public/index.html` (kalau pakai API)

**Tambahkan di `<head>` sebelum script lain:**
```html
<script src="js/api-helper.js"></script>
```

**Contoh:**
```html
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    
    <!-- API Helper - HARUS PALING ATAS -->
    <script src="js/api-helper.js"></script>
    
    <!-- Script lain di bawah -->
    <script src="js/app.js"></script>
</head>
```

---

## ✅ TESTING:

### **1. Test Homepage:**
```
https://pizzaazura.my.id
```

### **2. Test Admin Login:**
```
https://pizzaazura.my.id/public/admin-login.html
```

Atau kalau public di root:
```
https://pizzaazura.my.id/admin-login.html
```

### **3. Cek Console Browser:**
Buka DevTools (F12) → Console, harusnya muncul:
```
✅ API Helper loaded - All /api/ requests will go to Railway
   Railway URL: https://uploadtorailway-production.up.railway.app
```

### **4. Test Login:**
- Buka admin login
- Masukkan credentials admin
- Check Network tab (F12) → harusnya request ke Railway

---

## 🐛 TROUBLESHOOTING:

### **Error: 404 Not Found**
- Cek `.htaccess` ada di root `public_html/`
- Pastikan Apache mod_rewrite enabled

### **Error: 500 Internal Server**
- Cek folder permissions (`application/cache` dan `logs` harus 777)
- Cek PHP version (minimal 5.3.7, ideal 7.4+)

### **Error: API tidak connect**
- Cek Console browser, lihat URL yang dipanggil
- Pastikan `api-helper.js` sudah di-load
- Test Railway API langsung: https://uploadtorailway-production.up.railway.app/api/menu

### **Error: CORS (Access-Control-Allow-Origin)**
- Ini normal, nanti kita fix di Railway (tambah CORS middleware)

---

## 📞 CONTACT:

Kalau ada error, screenshot:
1. Error message
2. Browser Console (F12)
3. Network tab (request details)

Lalu kabari aku!
