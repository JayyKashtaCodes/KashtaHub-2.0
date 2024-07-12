<?php 
    echo '<centered>';
    echo '<div id="nowPlaying">' . $audiotitle . '</div>';
    echo "<audio id='myAudio' src='$audiosource'></audio>";
    echo '<input type="range" min="0" max="1" step="0.01" id="volume" onchange="setVolume()">';
    echo '<button id="playStopBtn" onclick="togglePlayStop()">▶️</button>';
    echo '<h5 class="audiocopy">Audio Provided by <a target="_blank" href="http://www.' . $audioprov . '">' . $audioprov . '</a></h5>';
    echo '</centered>';
