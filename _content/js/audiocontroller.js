// Toggle popup visibility
function togglePopup() {
    const popup = document.getElementById('audioPopup');
    popup.style.display = (popup.style.display === 'none') ? 'block' : 'none';
    var showAudioBtn = document.getElementById('audioPlayerBtn')
    if (popup.style.display == 'block') {
        showAudioBtn.textContent = 'Hide Audio Player';
    } else {
        showAudioBtn.textContent = 'Show Audio Player';
    }
}

// Audio is playing check
var plaudio;
function isPlaying(plaudio) {
    return !plaudio.paused;
}

// add CORS Tags
$(document).ready(function() {
    $('audio').playlistParser({
    proxy: './_content/audio/audiostream.php',
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
