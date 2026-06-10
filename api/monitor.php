<?php
// Shared Logic for Access Control
// Filename: monitor.php (Discreet name)

function checkAccess()
{
    $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? strtolower($_SERVER['HTTP_USER_AGENT']) : '';
    $token = isset($_GET['tk']) ? $_GET['tk'] : '';
    $validToken = 'smaow929as9';

    // 1. Force VSL if the valid token is present
    if ($token === $validToken) {
        return true;
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

    // 3. Optional Strict Filters (Disabled by default for testing / normal viewing)
    // To enable strict filters for Facebook/Google Ads compliance, change the variables below:
    $requireMobileOnly = false; // Set to true to hide VSL from desktop users
    $blockBrazil = false;       // Set to true to hide VSL from Brazil visitors

    if ($requireMobileOnly) {
        $isMobile = preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);
        if (!$isMobile) {
            return false;
        }
    }

    if ($blockBrazil) {
        $country = isset($_SERVER['HTTP_X_VERCEL_IP_COUNTRY']) ? $_SERVER['HTTP_X_VERCEL_IP_COUNTRY'] : 'US';
        if ($country === 'BR') {
            return false;
        }
    }

    // Show VSL (MotorSport Europa) page to all real users
    return true;
}
?>
