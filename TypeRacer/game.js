var characters = 0;
var finalScore = 0;
var msg = [ //this part needs to be connected to db 
    "function getElementKey(element: any, index: number): string { if (typeof element === 'object' && element !== null && element.key != null) {  return escape('' + element.key); }",
    "let child; let nextName; let subtreeCount = 0; const nextNamePrefix = nameSoFar === '' ? SEPARATOR : nameSoFar + SUBSEPARATOR;",
    "const iterator = iteratorFn.call(iterableChildren);let step; let ii = 0;",
    "(mappedChild.key && (!child || child.key !== mappedChild.key)",
    "function countChildren(children: ?ReactNodeList): number {let n = 0;mapChildren(children, () => {];",
    "function toArray(children: ?ReactNodeList): Array<React$Node> {return mapChildren(children, child => child) || [];}"
]

var selected_msg ='';

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

    time = 20;

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
            document.getElementById("textInput").setAttribute("readonly", "");
            clearInterval(x);
            finalScore = characters;
        }
    }
}

function timer15() {
    time = 15;
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
}

function timer30() {
    time = 30;
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
}

function timer60() {
    time = 60;
    document.getElementById("textInput").value = "";
    document.getElementById("textInput").focus();
    document.getElementById("textInput").removeAttribute("readonly", "");
}