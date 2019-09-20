
var canvas = document.getElementById("matrix_canvas");
var ctx = canvas.getContext("2d");

var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890|!£$%^&*()-=[]{};:#~<>/?";

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
  }

function getRandSymbol() {
    return symbols.charAt(Math.floor(Math.random() * symbols.length - 1));
}

class Snake {
    constructor() {
        this.snakeLength = getRndInteger(7, 14);
    }
}

ctx.font = "20px Courier";
ctx.fillStyle = "#008f11";

var width = "1920";
var height = "750";

var frequency = 10;
var timeout = Math.floor(1000/frequency);

function main() {
    for (var x = 50; x < 70; x += 20) {
        for (var y = 15; y < height; y += 20) {
            ctx.fillText(getRandSymbol(), x, y);
            ctx.fillText(getRandSymbol(), x, y);
        }
    }
    //setTimeout(timeout, 1000)
}

setTimeout(main, timeout)