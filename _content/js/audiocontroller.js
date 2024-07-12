// Toggle popup visibility
function togglePopup() {
    const popup = $('#audioPopup');
    var showAudioBtn = $('#audioPlayerBtn');

    // Change the button text immediately when clicked
    if (popup.is(':visible')) {
        showAudioBtn.text('Show Audio Player');
    } else {
        showAudioBtn.text('Hide Audio Player');
    }

    // Then toggle the popup
    popup.slideToggle('slow');
}

var yt_playlist;

if (yt_playlist == null) {
    // Audio is playing check
    var plaudio;
    function isPlaying(plaudio) {
        return !plaudio.paused;
    }

    // add CORS Tags
    $(document).ready(function() {
        $('audio').playlistParser({
        proxy: '/_content/audio/audiostream.php',
        navArrows: true
        });
    });


    // Get the audio element
    var audio = document.getElementById('myAudio');

    // Function to set volume
    function setVolume() {
        var volume = document.getElementById('volume').value;
        audio.volume = volume;
    }

    // Function to toggle play/stop
    function togglePlayStop() {
        var playStopBtn = document.getElementById('playStopBtn');
        if (!isPlaying(audio)) {
            audio.play();
            playStopBtn.textContent = '⏹️';
        } else {
            audio.pause();
            playStopBtn.textContent = '▶️';
        }
    }

    // Set initial volume to 0.5
    document.getElementById('volume').value = 0.5;
    audio.volume = 0.5;
}
