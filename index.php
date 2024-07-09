<?php 
    $audiosource = "http://allrelays.rainwave.cc/all.mp3";
    $audioprov = parse_url($audiosource, PHP_URL_HOST);
    if ($audiosource == "http://allrelays.rainwave.cc/all.mp3") {
        $audiotitle = "RainWave: All";
    } else {
        $audiotitle = basename(parse_url($audiosource, PHP_URL_PATH));
    }
    if ($audioprov == "allrelays.rainwave.cc") {
        $audioprov = "rainwave.cc";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Your Website Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css">

        <script>
            var audiosource = '<?php echo $audiosource; ?>';
        </script>

        <link rel="preload" as="script" href="https://code.jquery.com/jquery-latest.min.js">
        <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <link rel="preload" as="script" href="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js">
        <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js">
        <link rel="preload" as="script" href="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.1/dist/jquery.validate.min.js">
        <link rel="preload" as="script" href="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js">
        <link rel="preload" as="script" href="./_audio/jquery.playlist.js">

        <link rel="preload" as="script" href="main.js">

        <link rel="preload" as="script" href="./_audio/audiocontroller.js">
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
                <a class="breathanimation" href="./kashtalauncher/">KashtaNewCPLauncher</a>

                <button onclick="togglePopup()">Show Audio</button>

                <div class="languageList" id="google_translate_element"></div>
        </div>

        <div class="content">
        </div>

        <div class="popup-container" id="audioPopup">
            <h3 id="songName"><?php echo $audiotitle; ?></h3>
            <audio id="myAudio" src="<?php echo $audiosource;?>"></audio>
            <input type="range" min="0" max="1" step="0.01" id="volume" onchange="setVolume()">
            <button id="playStopBtn" onclick="togglePlayStop()">▶️</button>
            <h5 class="audiocopy">Audio Provided by <?php echo $audioprov; ?></h5>
        </div>
        <!-- JQuery/Extras -->
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.1/dist/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js"></script>
        <script type="text/javascript" src="./_audio/jquery.playlist.js"></script>
        <!-- Main Scripting -->
        <script src="main.js"></script>
        <!-- Audio Controllers -->
        <script src="./_audio/audiocontroller.js"></script>
    </body>
</html>
