function countChar(val) {
    var len = val.value.length;
    if (len >= 500) {
      val.value = val.value.substring(0, 500);
    } else {
        var number = 0 + len;
        document.getElementById('charNum').innerHTML = number;
        timer(number);
    }
};

function timer(val) {
    var runOnce = true;
    const startingMinutes = 1;
    let time = startingMinutes * 60;

    const countdownTimer = document.getElementById('timer');

    var x = setInterval(updateCountDown, 1000);
    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownTimer.innerHTML = minutes + ':' + seconds;
        time--;

        if (minutes < 0) {
            clearInterval(x);
            var Chars = val;
            document.getElementById('timer').innerHTML = Chars + " Characters Per Minute!";
        }
        if (runOnce = true) {
            timer = function(){};
        }
    }
}