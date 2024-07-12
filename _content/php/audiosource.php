<?php 
    $audiosource = $audioURL;
    $audioprov = parse_url($audiosource, PHP_URL_HOST);

    if ($audiosource == "http://allrelays.rainwave.cc/all.mp3") {
        $audiotitle = "Rainwave: All";
    } elseif ($audiosource == "https://rainwave.cc/tune_in/5.mp3.m3u") {
        $audiotitle = "Rainwave: All";
    } else {
        $audiotitle = basename(parse_url($audiosource, PHP_URL_PATH));
    }

    if ($audioprov == "allrelays.rainwave.cc") {
        $audioprov = "rainwave.cc";
    }
