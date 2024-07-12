<?php

$root = $_SERVER['DOCUMENT_ROOT'];

$path = $root . '/_content/php';

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

$sourceDir = $root . '/_content/js/';

$minifiedDir = $root . '/_content/js_min/';

if (!is_dir($minifiedDir)) {
    mkdir($minifiedDir, 0700);
}

// Get all .js files in the source directory
$files = glob($sourceDir . '*.js');

foreach ($files as $file) {
    // Create a new minifier for each file
    $minifier = new Minify\JS($file);

    // Get the base name of the file (e.g., 'file.js')
    $baseName = basename($file);

    // Replace '.js' with '.min.js'
    $minifiedName = str_replace('.js', '.min.js', $baseName);

    // Minify the file and save it to the minified directory
    $minifier->minify($minifiedDir . $minifiedName);
}
