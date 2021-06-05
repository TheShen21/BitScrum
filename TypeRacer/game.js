var characters = 0;

var msg = [ //this part needs to be connected to db 
    "<p>My first paragraph.</p>",
    "<h1>This is a heading</h1>",
    "<button>Click me</button>"
];  

function randomText (){
    var random = Math.floor(Math.random() * 3);
    document.querySelector(".textPreview").innerHTML = (msg[random]);   
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
    
    let time = 5;

    const countdownTimer = document.getElementById('timer');

    var x = setInterval(updateCountDown, 1000);
    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownTimer.innerHTML = minutes + ':' + seconds;
        time--;

        if (time < 0) {
            document.getElementById('timer').innerHTML = "You typed at " + characters + " characters per minute!";
            clearInterval(x);
            document.querySelector(".textInput").setAttribute("readonly", "");
        }
    }
}