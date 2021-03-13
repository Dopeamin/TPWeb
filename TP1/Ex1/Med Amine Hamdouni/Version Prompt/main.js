while (true) {
    difficulty = 0;
    while (difficulty > 3 || difficulty < 1) {
        difficulty = prompt("Enter Difficulty (1:easy,2:normal,3:hard)", "1");
    }
    tent = 8;
    if (difficulty == 1) {
        tent = 8;
    } else if (difficulty == 2) {
        tent = 5;
    } else {
        tent = 3;
    }
    random = Math.floor(Math.random() * 11);
    alert("You have " + tent + " tries");
    while (tent > 0) {
        do {
            tentative = prompt("Choose a number from 0 to 10", "0");
        } while (tentative > 10 || tentative < 0);
        if (tentative == random) {
            alert("You won");
            break;
        } else {
            tent--;
            if (tent == 0) {
                alert("You Lost");
            } else {
                alert("Wrong number you have " + tent + " tries left")
            }

        }
    }
}