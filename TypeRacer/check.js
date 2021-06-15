function compareChars(x, y) {
    return x === y;
}

function checkInput(input, code) {
    var index = input.length - 1;

    var charX = input[index];
    var charY = code[index];

    return compareChars(charX, charY);
}