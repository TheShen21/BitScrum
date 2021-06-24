function compareChars(x, y) {
    return x === y;
    // if (x === y) {
    //     //nothing
    // }
    // else (
    //     alert("not good")
    // )
}

function checkInput(input, code) {
    //alert("there is input! cool");
    var index = input.length - 1;

    var charX = input[index];
    var charY = code[index];

    return compareChars(charX, charY);
}

function checkCharacters(input, code) {
    var amount_right = 0;
    var amount_wrong = 0;
    for(var i = 0; i < input.length; i ++) {
        if(input.charAt(i) == code.charAt(i)) {
            //handle correct char
            amount_right = amount_right+1
            console.log("CHAR "+i+" IS CORRECT")
            colorGreen(i)
        }
        else {
            //handle wrong char
            amount_wrong = amount_wrong+1
            console.log("CHAR "+i+" IS WRONG")
            colorRed(i)
        }
    }
    return amount_right;
}

function colorGreen(character) {
    console.log("Coloring: " + character + " green")
}

function colorRed(character) {
    console.log("Coloring: " + character + " red")
}

//checkCharacters("var x = 0", "var y != 3") string is working but other variables aren't

var input = document.getElementById("textInput");
var code = selected_msg;