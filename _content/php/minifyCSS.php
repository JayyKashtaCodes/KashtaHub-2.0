<?php

if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    $path = './_content/php';
} elseif (basename($_SERVER['PHP_SELF']) == 'minifyCSS.php') {
    $path = '.';
} else {
    $path = '.';
}

require_once $path . '/minify/src/Minify.php';
require_once $path . '/minify/src/CSS.php';
require_once $path . '/minify/src/JS.php';
require_once $path . '/minify/src/Exception.php';
require_once $path . '/minify/src/Exceptions/BasicException.php';
require_once $path . '/minify/src/Exceptions/FileImportException.php';
require_once $path . '/minify/src/Exceptions/IOException.php';
require_once $path . '/path-converter/src/ConverterInterface.php';
require_once $path . '/path-converter/src/Converter.php';

use MatthiasMullie\Minify;

$sourceDir = './_content/css/';

$minifiedDir = './_content/css_min/';

if (!is_dir($minifiedDir)) {
    mkdir($minifiedDir, 0700);
}

// Get all .css files in the source directory
$files = glob($sourceDir . '*.css');

foreach ($files as $file) {
    // Create a new minifier for each file
    $minifier = new Minify\CSS($file);

    // Get the base name of the file (e.g., 'file.css')
    $baseName = basename($file);

    // Replace '.css' with '.min.css'
    $minifiedName = str_replace('.css', '.min.css', $baseName);

    // Minify the file and save it to the minified directory
    $minifier->minify($minifiedDir . $minifiedName);
}
