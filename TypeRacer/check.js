function checkInput(input, code) {
    //alert("there is input! cool");
    var index = input.length - 1;

    var charX = input[index];
    var charY = code[index];

    return compareChars(charX, charY);
}



function checkCharacters(textarea) {
    var input = textarea.value;
    //console.log(textarea.value)
    var amount_right = 0;
    var amount_wrong = 0;
    for(var i = 0; i < input.length; i ++) {
        if(input.charAt(i) == selected_msg.charAt(i)) {
            //handle correct char
            amount_right = amount_right+1
            console.log("CHAR "+ i +" IS CORRECT")
            colorGreen(i)
        }
        else {
            //handle wrong char
            amount_wrong = amount_wrong+1
            console.log("CHAR "+ i +" IS WRONG")
            colorRed(i)     
            disable();
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

function disable()
{
    document.onkeydown = function (e) 
        {
            if (e.keyCode==8) {
                enable(); return true;
            } 
            
            return false;
        } 
}
//if key press backspace function enable

function enable()
{
    document.onkeydown = function (e) 
        {
            return true;
        }
}