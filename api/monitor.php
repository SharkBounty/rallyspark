<?php
// Shared Logic for Access Control
// Filename: monitor.php (Discreet name)

function checkAccess()
{
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
    $token = isset($_GET['tk']) ? $_GET['tk'] : '';
    $validToken = 'smaow929as9';

    // 1. MUST have the valid token to see VSL page
    if ($token !== $validToken) {
        return false; // No token? Show safe page (recetas.php)
    }

    // 2. Bot Detection
    // We list keywords from Google, Facebook, Bing, and other auditing tools
    $botKeywords = [
        'googlebot', 'facebookexternalhit', 'facebot', 'lighthouse', 'crawler', 
        'spider', 'robot', 'crawling', 'adsbot-google', 'google-adwords', 
        'bingbot', 'yandex', 'baiduspider', 'twitterbot', 'ia_archiver'
    ];
    
    foreach ($botKeywords as $keyword) {
        if (strpos($userAgent, $keyword) !== false) {
            return false; // Show safe page (recetas.php) to bots
        }
    }

    // 3. Strict Filters (Enabled to protect VSL)
    $requireMobileOnly = false; // Set to true to hide VSL from desktop users
    $blockBrazil = true;        // Set to true to hide VSL from Brazil visitors

    if ($requireMobileOnly) {
        $isMobile = preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);
        if (!$isMobile) {
            return false;
        }
    }

    if ($blockBrazil) {
        $country = isset($_SERVER['HTTP_X_VERCEL_IP_COUNTRY']) ? strtoupper($_SERVER['HTTP_X_VERCEL_IP_COUNTRY']) : '';
        if ($country === 'BR') {
            return false;
        }
    }

    // Show VSL (MotorSport Europa) page only to real users with token
    return true;
}
?>
