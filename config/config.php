<?php
// Protocol detection
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");

// Host detection
$host = $_SERVER['HTTP_HOST'];

// Find the path to the project root (one level up from config folder)
$project_root_path = dirname(__DIR__);
$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\');

// Safety: fallback to script path if document root isn't fully available
if (strpos(str_replace('\\', '/', $project_root_path), str_replace('\\', '/', $doc_root)) === 0) {
    $base_path = str_replace('\\', '/', substr($project_root_path, strlen($doc_root)));
} else {
    $base_path = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
}

// Safety normalization: if base_path is just a slash, make it empty
if ($base_path === '/' || $base_path === '\\') {
    $base_path = '';
}

// Ensure base_path always starts with a slash if not empty
if ($base_path !== '' && $base_path[0] !== '/') {
    $base_path = '/' . $base_path;
}

// Define BASE_URL (no trailing slash)
if (!defined('BASE_URL')) {
    define('BASE_URL', $protocol . "://" . $host . $base_path);
}

// Helper to generate absolute URLs
if (!function_exists('url')) {
    function url($path = '')
    {
        // If the path is an external link or a hash, return it as is
        if (strpos($path, 'http') === 0 || strpos($path, '#') === 0) {
            return $path;
        }
        return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
    }
}

// Helper for asset paths

if (!function_exists('asset')) {
    function asset($path = '')
    {
        return url('assets/' . ltrim($path, '/'));
    }
}

// =========================================================================
// Company Details Config
// =========================================================================
define('COMPANY_NAME', 'Aim Infocorp');
define('COMPANY_NAME_LONG', 'Aim Infocorp Pvt. Ltd.');
define('COMPANY_EMAIL', 'info@aiminfocorp.com');
define('COMPANY_PHONE', '+91 7016156647');
define('COMPANY_PHONE_LINK', '+917016156647');
define('COMPANY_ADDRESS', 'Alpha Plus, 1006, 150 Feet Ring Rd, opp. GSPC Office, Tulsi Park, Rajkot, Gujarat 360005');
define('COMPANY_ADDRESS_SHORT', 'Rajkot, Gujarat India');

// =========================================================================
// Mail & SMTP Config
// =========================================================================
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// SMTP Settings
define('SMTP_HOST',     'smtp.gmail.com');
define('SMTP_AUTH',     true);
define('SMTP_USERNAME', 'piyushpanchalaim@gmail.com');
define('SMTP_PASSWORD', 'coim yvuc xkdp xfsh'); // app password
define('SMTP_SECURE',   'tls');
define('SMTP_PORT',     587);

// Email Identities
define('MAIL_FROM_EMAIL', 'noreply@aiminfocorp.com');
define('MAIL_FROM_NAME',  'Aim Infocorp Website');
define('ADMIN_EMAIL',     'aiminfocorp.com@gmail.com'); // Form data Show in this mail

// Mail Debug
define('MAIL_DEBUG', 0);

// Helper to extract and format real testimonials from portfolio data
if (!function_exists('getRealTestimonials')) {
    function getRealTestimonials($portfolioData, $limit = 0)
    {
        $testimonials = [];
        foreach ($portfolioData ?? [] as $case) {
            if (isset($case['testimonial'])) {
                $t = $case['testimonial'];
                // Generate Initials
                $words = explode(' ', trim($t['name']));
                $initials = strtoupper(substr($words[0] ?? 'A', 0, 1));
                if (count($words) > 1) {
                    $initials .= strtoupper(substr(end($words), 0, 1));
                }
                $t['initials'] = $initials;

                // Deterministic Color Mapping
                $colors = [
                    'linear-gradient(135deg,#5b21b6,#a78bfa)',
                    'linear-gradient(135deg,#06b6d4,#0891b2)',
                    'linear-gradient(135deg,#059669,#34d399)',
                    'linear-gradient(135deg,#b91c1c,#f87171)',
                    'linear-gradient(135deg,#ea580c,#fb923c)',
                ];
                $t['color'] = $colors[crc32($t['name']) % count($colors)];
                $t['rating'] = $t['rating'] ?? 5.0;

                $testimonials[] = $t;
                if ($limit > 0 && count($testimonials) >= $limit) {
                    break;
                }
            }
        }
        return $testimonials;
    }
}

// Helper to fetch client logos from assets/images/client_logo
if (!function_exists('getClientLogos')) {
    function getClientLogos()
    {
        $logoDir = dirname(__DIR__) . '/assets/images/client_logo';
        $logos = [];
        $files = glob($logoDir . '/*.{webp,png,jpg,jpeg,svg}', GLOB_BRACE);

        if ($files) {
            foreach ($files as $file) {
                $filename = basename($file);
                $alt = str_replace(['_', '-'], ' ', pathinfo($filename, PATHINFO_FILENAME));
                $alt = ucwords($alt);
                $logos[] = [
                    'src' => asset('images/client_logo/' . $filename),
                    'alt' => $alt
                ];
            }
        }
        return $logos;
    }
}
