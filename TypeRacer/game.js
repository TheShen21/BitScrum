<<<<<<< Updated upstream
function timer() {
    const startingMinutes = 1;
    let time = startingMinutes * 60;
=======
var characters = 0;
var finalScore = 0;
var msg = [ //this part needs to be connected to db 
    "<p>My first paragraph.</p>",
    "<h1>This is a heading</h1>",
    "<button>Click me</button>"
];

var selected_msg = '';

function randomText (){
    var random = Math.floor(Math.random() * 3);
    selected_msg = (msg[random]);
    document.getElementById("textPreview").innerHTML = selected_msg;   
}   

function countChar(inputText) {
    characters = inputText.value.length
};

var running = false;

function startTimer() {
    if (running == true) {
        return
    }
    running = true;

    time = 3;
>>>>>>> Stashed changes

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
            document.getElementById('timer').innerHTML = minutes + ':' + seconds;
        }
    }
}