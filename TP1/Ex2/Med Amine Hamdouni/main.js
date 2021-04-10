text = document.getElementById("text");
color = document.getElementById("color");
size = document.getElementById("size");
font = document.getElementById("fonts");
setInterval(() => {
    text.style.color = color.value;
    text.style.fontSize = size.value;
    text.style.fontFamily = font.value;
}, 20);