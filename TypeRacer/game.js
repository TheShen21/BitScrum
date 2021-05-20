
function timer() {
    const startingMinutes = 1;
    let time = startingMinutes * 60;

    const countdownEl = document.getElementById('timer');

    var x = setInterval(updateCountDown, 1000);

    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownEl.innerHTML = minutes + ':' + seconds;
        time--;

        if (minutes < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Time is up";
        }
    }
}