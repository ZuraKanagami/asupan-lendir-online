<?php
define('LINK_WATCH', '/watch/'); // Jika menggunakan Rewrite gunakan ini
// define('LINK_WATCH', '/watch.php?s='); // Jika tidak menggunakan Rewrite gunakan ini


//   ATURAN REWRITE SERVER NGINX
//   1. Salin :
//
//   location /watch/ {try_files $uri $uri/ /watch.php?s=$1;}
//
//   2. Paste didalam blok server NGINX
//
//
//   ATURAN REWRITE SERVER APACHE
//   1. Buat file .htaccess
//   2. Salin :
//
//   RewriteEngine On
//   RewriteCond %{REQUEST_FILENAME} !-f
//   RewriteCond %{REQUEST_FILENAME} !-d
//   RewriteRule ^watch/(.*)$ /watch.php?s=$1 [L,QSA]
//
//   3. Paste  lalu simpan di file .htaccess


// META DESKRIPSI
define('META_TITLE', 'BOKEP INDO - Nonton Bokep Indo Video Terbaru');
define('META_DESCRIPTION', 'Nonton Bokep Indo & JAV Terbaru Tanpa Iklan');
define('META_COPYRIGHT', 'Hak Cipta oleh Bokep2025');
define('META_KEYWORD', 'bokep2025, bokep indo, bokepindo, bokep indo terbaru, bokep indoh, bokep crot, xnxx, video bokep, jav sub indo, jav terbaru, bokep terbaru');
?>