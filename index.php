<?php
    // Minify
    require './_content/php/minifyCSS.php';
    require './_content/php/minifyJS.php';

    // Audio Player
    $audiosource = "https://rainwave.cc/tune_in/5.mp3.m3u";
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

    // Display Errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Website Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="./_content/css_min/main.min.css">

        <script>
            var audiosource = '<?php echo $audiosource; ?>';
        </script>
        
        <!-- Javascript Loading -->
        <?php include './_content/php/preloadScripts.php'; ?>

        <link rel="preload" as="script" href="main.js">

        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            }
        </script>
    </head>
    <body>
        <video autoplay loop muted preload="auto" poster="https://img.freepik.com/free-photo/digital-art-beautiful-mountains_23-2151123686.jpg">
            <source src="https://videos.pexels.com/video-files/3163534/3163534-uhd_2560_1440_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="navbar">
                <a class="breathanimation" href="./">Home</a>

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

                <a class="breathanimation" href="./contact/">Contact</a>
                <a class="breathanimation" href="#placeholder">Placeholder</a>

                <button id="audioPlayerBtn" onclick="togglePopup()">Show Audio Player</button>

                <div class="languageList" id="google_translate_element"></div>
        </div>

        <div class="content">
        </div>

        <div class="popup-container" id="audioPopup">
            <div id="nowPlaying"><?php echo $audiotitle; ?></div>
            <audio id="myAudio" src="<?php echo $audiosource;?>"></audio>
            <input type="range" min="0" max="1" step="0.01" id="volume" onchange="setVolume()">
            <button id="playStopBtn" onclick="togglePlayStop()">▶️</button>
            <h5 class="audiocopy">Audio Provided by <?php echo $audioprov; ?></h5>
        </div>
        <!-- JQuery/Extras -->
        <?php include './_content/php/scriptLoad.php'; ?>
        <!-- Main Scripting -->
        <script src="main.js"></script>
    </body>
</html>
