<?php
// Configuration Settings

// CDN Configuration
// To use a GitHub CDN (via jsDelivr):
// 1. Upload your 'asset' folder to a public GitHub repository.
// 2. Set 'USE_CDN' to true.
// 3. Set 'CDN_BASE_URL' to 'https://cdn.jsdelivr.net/gh/YOUR_USERNAME/YOUR_REPO_NAME/'
define('USE_CDN', false); 
define('CDN_BASE_URL', 'https://cdn.jsdelivr.net/gh/USERNAME/REPO/');

// Helper function to get asset URL
function get_asset_url($path) {
    if (USE_CDN) {
        // Remove leading slash if present to avoid double slashes
        $cleanPath = ltrim($path, '/');
        return CDN_BASE_URL . $cleanPath;
    }
    return $path;
}
?>
