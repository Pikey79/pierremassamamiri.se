
document.getElementById("btnGame").addEventListener("click", function () {
    
    var allWords = ["röd", "grön", "svart", "blå", "röd"];
    var selectedWord = allWords[Math.floor(Math.random() * allWords.length)];
    var wrongGuesses = 6;
    var hintLines = [];
    
    for (var i = 0; i < selectedWord.length; i++) {
        hintLines[i] = "_";
    }
    
    var lettersToGuess = selectedWord.length;
    
    while (lettersToGuess > 0 && wrongGuesses > 0) {
        
        var message = hintLines.join(" ");
        document.getElementById("progressDisplay").textContent = message;
        
        var userGuess = prompt("Skriv in en bokstav A-Ö").toLowerCase();
        
        var matchesNone = true;
        
        for (var j = 0; j <= selectedWord.length; j++) {
            
            if (selectedWord[j] === userGuess) {
                hintLines[j] = userGuess;
                lettersToGuess--;
                matchesNone = false;
            }
        }
        
        if (matchesNone) {
            wrongGuesses--;
            alert("Fel!! Du har bara " + wrongGuesses + " kvar av 6 försök!");
        }
    }
    if (lettersToGuess > 0) {
        alert("Du förlorade!");
    }
    else {
        alert("Du gissade rätt ord!  Det var: " + selectedWord);
    }
});






