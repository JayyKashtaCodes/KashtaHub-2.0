<?php 
$scripts = [
    [
        "url" => "https://code.jquery.com/jquery-latest.min.js",
        "priority" => 1,
        "async" => false
    ],
    [
        "url" => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        "priority" => 2,
        "async" => false
    ],
    [
        "url" => "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit",
        "priority" => 3,
        "async" => true
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js",
        "priority" => 4,
        "async" => false
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js",
        "priority" => 5,
        "async" => false
    ],
    [
        "url" => "https://cdn.jsdelivr.net/npm/jquery-validation@1.20.1/dist/jquery.validate.min.js",
        "priority" => 6,
        "async" => false
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js",
        "priority" => 7,
        "async" => true
    ],
    [
        "url" => "./_content/js_min/jquery.playlist.min.js",
        "priority" => 8,
        "async" => false
    ],
    [
        "url" => "./_content/js_min/audiocontroller.min.js",
        "priority" => 9,
        "async" => true
    ]
];

usort($scripts, function($a, $b) {
    return $a['priority'] - $b['priority'];
});

foreach ($scripts as $script) {
    $async_attr = $script['async'] ? 'async' : '';
    echo "<script src='{$script['url']}' {$async_attr}></script>\n        ";
}
