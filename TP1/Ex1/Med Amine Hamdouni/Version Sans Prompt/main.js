button = document.getElementById('button');
easy = document.getElementById('easy');
normal = document.getElementById('normal');
hard = document.getElementById('hard');
var tent = 8;
init = 8;
random = Math.floor(Math.random() * 11);
easy.addEventListener("click", function() {
    tent = 8;
    init = 8;
    tentatives.innerHTML = tent;
    random = Math.floor(Math.random() * 11);
});
normal.addEventListener("click", function() {
    tent = 5;
    init = 5;
    tentatives.innerHTML = tent;
    random = Math.floor(Math.random() * 11);
});
hard.addEventListener("click", function() {
    tent = 3;
    init = 3;
    tentatives.innerHTML = tent;
    random = Math.floor(Math.random() * 11);
});
tentatives = document.getElementById('tentative');
tentatives.innerHTML = tent;
text = document.getElementById("text");
button.addEventListener("click", function() {
    if (text.value == "") {
        alert("Make sure to fill the input");
    } else
    if (text.value == random) {
        alert("You won");
        tent = init;
        random = Math.floor(Math.random() * 11);
        text.value = "";
        tentatives.innerHTML = tent;
    } else {
        alert("Wrong Number");
        tent--;
        text.value = "";
        tentatives.innerHTML = tent;
        if (tent == 0) {
            alert("Game Will be Reset");
            tent = init;
            random = Math.floor(Math.random() * 11);
            text.value = "";
            tentatives.innerHTML = tent;
        }
    }
})