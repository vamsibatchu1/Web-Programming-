var secretNumber;
var guessCount;
var gussedData = [];
var from = "0";
var to = "100";
var maxGuessCount;

function reset() {
	document.guessForm.userGuess.value = "";
	document.guessForm.hint.value = "Enter the number and press Guess.";
	document.guessForm.chance.value = "";
	document.guessForm.guesses.value = "";
	document.guessForm.userGuess.focus();
	gussedData = [];
	maxGuessCount=7;
	guessCount = gussedData.length; // initialize number of guesses made
	document.guessForm.guesses.value = "You have made " + guessCount + " guesses";
	document.guessForm.chance.value = "You have " + maxGuessCount + " chance(s) left";
	secretNumber = 0 + Math.floor(Math.random() *99);
 	
}

function guess() {
	var guessedNumber = parseInt(document.guessForm.userGuess.value,10);
	
	maxGuessCount--;
	var guessMessage = "";
	gussedData.push(guessedNumber);
		
		guessCount = gussedData.length;
		for (var i = 0; i < guessCount; i++) {
			guessMessage += gussedData[i] + " ";
		}
		document.guessForm.guesses.value="Your Guesses: " + guessMessage;
	
	if(guessedNumber >= 0 && guessedNumber <= 100) {
		
			if(guessedNumber == secretNumber) {
				 var attmpt = "";
					if(guessCount === 1){attmpt=" attempt ";} else {attmpt=" attempts ";}
					document.guessForm.hint.value = "";
					document.guessForm.guesses.value = "";
					window.alert("Congratulations!!!!Your guess is correct!\n It took you " + guessCount + attmpt + "to guess this number.");
					location.reload();
			}
			else{
				if(guessedNumber > secretNumber) {
					document.guessForm.hint.value = "Result is less than " + guessedNumber + ".";
						} 
				else{
				document.guessForm.hint.value = "Result is greater than " + guessedNumber + ".";
				} 
				if(maxGuessCount==0){
					window.alert("Oops!! No turns left.\n Result was " + secretNumber + ".");
					reset();
				}
				
			}
			
			document.guessForm.chance.value = "You have " + maxGuessCount + " chance(s) left";
	
			
	} else { // number guessed was not in the From-To range
		window.alert("The number you entered is not in the From-To range.  Please enter a valid number.");
	}
	document.guessForm.userGuess.value = "";
	document.guessForm.userGuess.focus();
}
