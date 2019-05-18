// Game options
const CHOICES = {
    1: "ROCK",
    2: "PAPER",
    3: "SCISSOR"
};

// Winning combination
const WIN_CHOICE = {
    1: 2,
    2: 3,
    3: 1
};

// Messages
const WIN_MESSAGE = {
    1: "You win.",
    2: "Computer win.",
    3: "It’s a tie."
};

// Global variable
var userWin = 0;
var compWin = 0;

/**
 * Generate random choice for computer
 *
 * @returns WIN_CHOICE{number}
 */
function computerChoice() {
    return parseInt(1 + Math.random() * 3);
}

/**
 * Check winning status of choices
 *
 * @param comChoice
 * @param playerChoice
 *
 * @returns string
 */
function checkResult(comChoice, playerChoice) {
    if (WIN_CHOICE[comChoice] === playerChoice) {
        userWin++;
        return WIN_MESSAGE[1];
    }
    if (WIN_CHOICE[playerChoice] === comChoice) {
        compWin++;
        return WIN_MESSAGE[2];
    }
    return WIN_MESSAGE[3];
}

/**
 * Check final winning status
 *
 * @returns WIN_MESSAGE{number}
 */
function winStatus() {
    if (userWin > compWin) {
        return WIN_MESSAGE[1];
    }
    if (userWin < compWin) {
        return WIN_MESSAGE[2];
    }
    return WIN_MESSAGE[3];
}

/**
 * Handle user selection of choice
 *
 * @returns WIN_CHOICE{choice}
 */
function playChoice() {
    var choice = null;
    while (choice === null) {
        var input = prompt("Press 1 for ROCK\nPress 2 for PAPER\nPress 3 for SCISSOR");
        if (input === null) {
            alert("Please enter your choice");
            continue;
        } else if (isNaN(input)) {
            alert("Incorrect choice");
            continue;
        }
        input = parseInt(input);
        if (input < 1 || input > 3) {
            alert("Incorrect choice");
            continue;
        }
        choice = input;
    }
    return choice;
}

/**
 * Playing game and displaying choices
 */
function playGame() {
    var nextRound = false;
    do {
        var playerChoice = playChoice();
        var comChoice = computerChoice();
        var result = "You pick " + CHOICES[playerChoice] + ". Computer pick " + CHOICES[comChoice] + "\n"
          + checkResult(comChoice, playerChoice) + "\n"
          + "You: " + userWin + "\n"
          + "Computer: " + compWin;
        alert(result);
        nextRound = confirm("Do you want to play again?");
    } while (nextRound !== false);

    var finalScore = "Final score:\n"
      + "You: " + userWin + "\n"
      + "Computer: " + compWin + "\n"
      + winStatus(comChoice, playerChoice);
    alert(finalScore);
}

// starting game from this function
playGame();
