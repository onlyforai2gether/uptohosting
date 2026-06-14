/**
 * Pizza Azura - API Configuration
 * 
 * PRODUCTION CONFIG:
 * - Frontend: https://pizzaazura.my.id (Shared Hosting)
 * - API Backend: Railway (Node.js)
 */

// Railway API Base URL
const API_BASE_URL = 'https://uploadtorailway-production.up.railway.app';

// Helper function untuk API calls
function apiUrl(endpoint) {
    return API_BASE_URL + endpoint;
}

// Export untuk dipakai di file lain
window.API_BASE_URL = API_BASE_URL;
window.apiUrl = apiUrl;

console.log('🍕 Pizza Azura API Config loaded');
console.log('   API URL:', API_BASE_URL);
