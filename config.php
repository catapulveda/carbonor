<?php
session_start();
// Idioma
$supported = ['es','br'];
if (isset($_GET['lang']) && in_array($_GET['lang'],$supported)) {
  $_SESSION['lang'] = $_GET['lang'];
}
define('LANG', $_SESSION['lang'] ?? 'es');

// Rutas bases
define('PROJECT_ROOT', __DIR__);            // e.g. C:/.../paginaweb
define('LANG_DIR', PROJECT_ROOT . '/assets/lang');

// Cargo traducciones comunes
$translations = [];
$commonFile = LANG_DIR . '/' . LANG . '/common.php';
if (file_exists($commonFile)) {
    $translations = include $commonFile;
}

// Helper
function translate($key) {
  global $translations;
  return $translations[$key] ?? $key;
}
