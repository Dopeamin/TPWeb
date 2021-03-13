list = document.getElementsByTagName("li");
for (i = 0; i < list.length; i++) {
    list[i].addEventListener("click", function() {
        var randomColor = Math.floor(Math.random() * 16777215).toString(16);
        this.style.color = randomColor;
    })
}