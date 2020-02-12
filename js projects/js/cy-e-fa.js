const getUserChoice = userInput => {
    userInput = userInput.toLowerCase();
    if (userInput === 'rock' || userInput === 'paper' || userInput === 'scissors' || userInput === 'bomb') {
        return userInput;
    } else {
        console.log('Error');
    }
}

function getComputerChoice() {
    const randomNumber = Math.floor(Math.random() * 3);
    switch (randomNumber) {
        case 0:
            return 'rock';
            break;
        case 1:
            return 'paper';
            break;
        case 2:
            return 'scissors';
            break;
    }
}

function determineWinner(userChoice, computerChoice) {
    if (userChoice === 'bomb') {
        return 'user secret win';
    }
    if (userChoice === computerChoice) {
        return 'the game was a tie.';
    }
    if (userChoice === 'rock') {
        if (computerChoice === 'paper') {
            return 'computer won';
        } else {
            return 'user won';
        }
    }
    if (userChoice === 'paper') {
        if (computerChoice === 'rock') {
            return 'computer won';
        } else {
            return 'user won';
        }
    }
    if (userChoice === 'scissors') {
        if (computerChoice === 'rock') {
            return 'computer won';
        } else {
            return 'user won';
        }
    }
}

const playGame = () => {
    alert 
    const userChoice = getUserChoice(document.getElementById("input_id").value);
    const computerChoice = getComputerChoice();
    console.log('You threw: ' + userChoice);
    console.log('The computer threw:' + computerChoice);
    console.log(determineWinner(userChoice, computerChoice));
};
