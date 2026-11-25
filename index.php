<?php
// Router utama (front controller)
ob_start();            // agar redirect() dari modul tetap bisa dipakai setelah header HTML dimuat
session_start();
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/helpers/functions.php';

// Whitelist rute
$routes = [
    'dashboard'   => __DIR__ . '/views/dashboard.php',
    'profil'      => __DIR__ . '/modules/page/profil.php',
    'kontak'      => __DIR__ . '/modules/page/kontak.php',
    'user/list'   => __DIR__ . '/modules/user/list.php',
    'user/add'    => __DIR__ . '/modules/user/add.php',
    'user/edit'   => __DIR__ . '/modules/user/edit.php',
    'user/delete' => __DIR__ . '/modules/user/delete.php',
];

$page = $_GET['page'] ?? 'dashboard';
if (!is_string($page) || !array_key_exists($page, $routes)) {
    http_response_code(404);
    $currentPage = '';
    $contentFile = __DIR__ . '/views/404.php';
} else {
    $currentPage = $page;
    $contentFile = $routes[$page];
}

require_once __DIR__ . '/views/header.php';
require $contentFile;
require_once __DIR__ . '/views/footer.php';
ob_end_flush();
