/**
 * Pizza Azura - API Helper
 * 
 * Override fetch() untuk otomatis redirect ke Railway API
 */

(function() {
    // Railway API Base URL
    const API_BASE_URL = 'https://uploadtorailway-production.up.railway.app';
    
    // Backup original fetch
    const originalFetch = window.fetch;
    
    // Override fetch
    window.fetch = function(url, options) {
        // Kalau URL mulai dengan /api/, ganti ke Railway
        if (typeof url === 'string' && url.startsWith('/api/')) {
            url = API_BASE_URL + url;
            console.log('🔄 API Request:', url);
        }
        
        // Call original fetch
        return originalFetch(url, options);
    };
    
    console.log('✅ API Helper loaded - All /api/ requests will go to Railway');
    console.log('   Railway URL:', API_BASE_URL);
})();
