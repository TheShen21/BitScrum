function buttonColour() {
    document.getElementById("button1").addEventListener("click", function() {
        document.getElementById("button1").style.backgroundColor = "rgb(48, 48, 48)"
    })
    document.getElementById("button2").addEventListener("click", function() {
        document.getElementById("button2").style.backgroundColor = "rgb(48, 48, 48)"
    })
    document.getElementById("button3").addEventListener("click", function() {
        document.getElementById("button3").style.backgroundColor = "rgb(48, 48, 48)"
    })
    document.getElementById("button4").addEventListener("click", function() {
        document.getElementById("button4").style.backgroundColor = "rgb(48, 48, 48)"
    })
    document.getElementById("button5").addEventListener("click", function() {
        document.getElementById("button5").style.backgroundColor = "rgb(48, 48, 48)"
    })
    document.getElementById("button6").addEventListener("click", function() {
        document.getElementById("button6").style.backgroundColor = "rgb(48, 48, 48)"
    })
}

function overlayOff() {
    document.getElementById("overlay").style.display = "none";
    document.getElementById("textInput").focus();
}

function overlaySettings() {
    document.getElementById("textInput").blur();
    
}

var characters = 0;
var finalScore = 0;
var x;
var test = 0;
var msg = [ //this part needs to be connected to db 
    "<p>My first paragraph.</p>",
    "<h1>This is a heading</h1>",
    "<button>Click me</button>"
];  

function randomText (){
    var random = Math.floor(Math.random() * 3);
    document.getElementById("textPreview").innerHTML = (msg[random]);   
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

    const countdownTimer = document.getElementById('timer');

    x = setInterval(updateCountDown, 1000);

    function updateCountDown() {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        seconds = seconds < 10 ? '0' + seconds : seconds;

        countdownTimer.innerHTML = minutes + ':' + seconds;
        time--;

        if (time < 0) {
            document.getElementById('timer').innerHTML = "You typed at " + characters + " characters per minute!";
            document.getElementById("textInput").setAttribute("readonly", "");
            clearInterval(x);
            finalScore = characters;
        }
    }
}

function timer15() {
    clearInterval(x);
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
    time = 15;
}

function timer30() {
    clearInterval(x);
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
    time = 30;
}

function timer60() {
    clearInterval(x);
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
    time = 60;
}