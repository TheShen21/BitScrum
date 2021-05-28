//issue: function can execute multiple times which causes the creation of multiple timers in the same <div>
//to-do: replace the "if (minutes <0).innerhtml" with a wpm calculation
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


