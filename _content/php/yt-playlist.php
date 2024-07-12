<?php
    $url = $yt_playlist;
    parse_str(parse_url($url, PHP_URL_QUERY), $url_vars);
    $url_vars['list'];
    $playlist_id = implode(", ", $url_vars);
