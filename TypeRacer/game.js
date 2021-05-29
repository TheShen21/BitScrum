function countChar(val) {
    var len = val.value.length;
    if (len >= 500) {
      val.value = val.value.substring(0, 500);
    } else {
        document.getElementById('charNum').innerHTML = (0 + len);
    }
};

function timer() {
    const startingMinutes = 1;
    let time = startingMinutes * 6;

    const countdownTimer = document.getElementById('timer');

    var x = setInterval(updateCountDown, 1000);

    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownTimer.innerHTML = minutes + ':' + seconds;
        time--;

        if (minutes < 0) {
            document.getElementById('timer').innerHTML = "Good Job, You typed at 60 WPM";
        }
    }
}


