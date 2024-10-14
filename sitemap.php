<?php
include('config.php');
header('Content-Type: application/xml; charset=utf-8');
$api_url = 'https://vidwish.com/admin/core/api.php';
$domain = 'https://' . $_SERVER['HTTP_HOST'];
$base_url = $domain . LINK_WATCH;


echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$response = file_get_contents($api_url);
if ($response === FALSE) {
    echo '<!-- Error: Cannot access API -->';
    echo '</urlset>';
    exit;
}
$videos = json_decode($response, true);
if (is_array($videos) && !empty($videos)) {
    foreach ($videos as $video) {
        $slug = $video['slug'];
        $date = date('Y-m-d', strtotime($video['date']));

        echo '<url>';
        echo '<loc>' . htmlspecialchars($base_url . $slug) . '</loc>';
        echo '<lastmod>' . $date . '</lastmod>';
        echo '<changefreq>daily</changefreq>';
        echo '<priority>0.8</priority>';
        echo '</url>';
    }
} else {
    echo '<!-- Error: No videos found -->';
}
echo '</urlset>';
?>
