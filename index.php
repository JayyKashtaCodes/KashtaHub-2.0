<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    // Minify
    require $root . '/_content/php/minifyCSS.php';
    require $root . '/_content/php/minifyJS.php';

    // Audio Player
    // Choose a playlist. 1. youtube, 2 souncloud, 3 external or 4 spotify
    $pl_choice = 3;
    

    $yt_playlist = "https://www.youtube.com/playlist?list=PLD3MboLuMLE1nFTc1bFj3Sz2g6FhBdVKB";
    
    $audioURL = "https://nolife-radio.com/radio/NoLife-radio.m3u";
    
    $sc_playlist = "1814345979"; // in the playlist, click share, Embed, then in the code find "src=" and its the api.soundcloud.com/playlists/#### use the numbers from that only.
    
    $spotifyURL = ""; //Spotify can only show small parts of the songs external good for showing off your own songs quickly but not for showing off other people's songs.

    if ($pl_choice == 3){
        include $root . '/_content/php/audiosource.php';
    } elseif ($pl_choice == 1) {
        include $root . "/_content/php/yt-playlist.php";
    }

    include $root . "/_content/php/debugging.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Website Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="<?php echo $audioURL ?>" crossorigin>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Emoji:wght@300..700&display=swap" rel="stylesheet">

        <link href="/_content/css_min/main.min.css" rel="stylesheet">
        <link href="/_content/css_min/main.mobile.min.css" rel="stylesheet">

        <script>
            <?php if ($pl_choice == 3): ?>
                var audiosource = '<?php echo $audiosource; ?>';
            <?php endif; ?>
            <?php if ($pl_choice == 1): ?>
                var yt_playlist = '<?php echo $yt_playlist; ?>';
            <?php endif; ?>
        </script>
        
        <!-- Javascript Loading -->
        <?php include $root . '/_content/php/preloadScripts.php'; ?>

        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            }
        </script>
    </head>
    <body>
        <video autoplay loop muted preload="auto" poster="https://img.freepik.com/free-photo/digital-art-beautiful-mountains_23-2151123686.jpg">
            <source src="/_content/video/back.mp4" type="video/mp4">
        </video>

        <div class="navbar">
                <a class="breathanimation" href="/">Home</a>

                <div class="dropdown">
                    <a class="dropbtn">Mods</a>
                    <div class="dropdown-content">
                        <a class="breathanimation" href="#mod1">Mod 1</a>
                        <a class="breathanimation" href="#mod2">Mod 2</a>
                        <a class="breathanimation" href="#mod3">Mod 3</a>
                        <a class="breathanimation" href="#mod4">Mod 4</a>
                        <a class="breathanimation" href="#mod5">Mod 5</a>
                        <a class="breathanimation" href="#mod6">Mod 6</a>
                    </div>
                </div> 

                <div class="dropdown">
                    <a class="dropbtn">Games</a>
                    <div class="dropdown-content">
                        <a class="breathanimation" href="#game1">Game 1</a>
                    </div>
                </div>

                <a class="breathanimation" href="/contact/">Contact</a>
                <a class="breathanimation" href="#placeholder">PLACEHOLDER</a>

                <button id="audioPlayerBtn" onclick="togglePopup()">Show Audio Player</button>

                <div class="languageList" id="google_translate_element"></div>
        </div>

        <div class="content">
        </div>

        <div class="popup-container" id="audioPopup">
            <?php if ($pl_choice == 3) {
                    include $root . '/_content/php/audioPlayer.php';
                } elseif ($pl_choice == 1) {
                    echo "<iframe class='yt-playlist' src='https://www.youtube-nocookie.com/embed/videoseries?si=ufsX_RiXUKIcPuO8&amp;list=" . $playlist_id . "'title='Audio' frameborder='0' allow='accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>";
                } elseif ($pl_choice == 2) {
                    echo '<iframe class="sc-playlist" scrolling="no" frameborder="no" allow="" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/'. $sc_playlist .'&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=false&show_reposts=false&show_teaser=false&visual=false"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/nemesis-le" title="Nemesis Le" target="_blank" style="color: #cccccc; text-decoration: none;">Nemesis Le</a> · <a href="https://soundcloud.com/nemesis-le/sets/obscure-vinyls" title="Obscure Vinyls" target="_blank" style="color: #cccccc; text-decoration: none;">Obscure Vinyls</a></div>';
                } elseif ($pl_choice == 4) {
                    echo '<iframe class="sp-playlist" src="https://open.spotify.com/embed/playlist/37i9dQZF1E4xaO6uB8gjUF?utm_source=generator&theme=0" frameBorder="0" allowfullscreen="" allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>';
                } else {
                    echo '<h2>No Configured Playlist</h2>';
                }
            ?>
        </div>
        <!-- JQuery/Extras -->
        <?php include  $root . '/_content/php/scriptLoad.php'; ?>
    </body>
</html>
