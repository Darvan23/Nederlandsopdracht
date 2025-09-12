<?php
declare(strict_types=1);
session_start();

// Languages
$supported = ['nl','en'];
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported, true)) {
  $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'nl';
require __DIR__ . "/lang/{$lang}.php"; // exposes $t array

// Router
$page = $_GET['page'] ?? 'home';
$allowed = ['home','offer','contact'];
if (!in_array($page, $allowed, true)) {
  $page = '404';
}

$title = $t['site_title'];
require __DIR__ . "/partials/head.php";
require __DIR__ . "/partials/nav.php";
require __DIR__ . "/pages/{$page}.php";
require __DIR__ . "/partials/footer.php";
