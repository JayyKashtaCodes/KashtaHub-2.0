<?php 
$scripts = [
    [
        "url" => "https://code.jquery.com/jquery-latest.min.js",
        "priority" => 1
    ],
    [
        "url" => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js",
        "priority" => 2
    ],
    [
        "url" => "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit",
        "priority" => 3
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js",
        "priority" => 4
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js",
        "priority" => 5
    ],
    [
        "url" => "https://cdn.jsdelivr.net/npm/jquery-validation@1.20.1/dist/jquery.validate.min.js",
        "priority" => 6
    ],
    [
        "url" => "https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js",
        "priority" => 7
    ],
    [
        "url" => "./_content/js_min/jquery.playlist.min.js",
        "priority" => 8
    ],
    [
        "url" => "./_content/js_min/audiocontroller.min.js",
        "priority" => 9
    ]
];

usort($scripts, function($a, $b) {
    return $a['priority'] - $b['priority'];
});

foreach ($scripts as $script) {
    echo "<link rel='preload' as='script' href='{$script['url']}'>\n        ";
}
