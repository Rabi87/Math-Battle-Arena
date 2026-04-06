let ropePosition = 50;
let leftScore = 0;
let rightScore = 0;
let leftQuestion = {};
let rightQuestion = {};
let leftInput = '';
let rightInput = '';
const WIN_POSITION_MIN = 15;
const WIN_POSITION_MAX = 85;
const PULL_AMOUNT = 4;
let gameActive = true;

function generateQuestion() {
    const operators = ['+', '-'];
    const operator = operators[Math.floor(Math.random() * operators.length)];
    let num1, num2;
    
    if (operator === '+') {
        num1 = Math.floor(Math.random() * 50) + 1;
        num2 = Math.floor(Math.random() * 50) + 1;
    } else {
        num1 = Math.floor(Math.random() * 50) + 10;
        num2 = Math.floor(Math.random() * num1);
    }
    
    const answer = operator === '+' ? num1 + num2 : num1 - num2;
    
    return {
        question: `${num1} ${operator} ${num2} = ?`,
        answer: answer
    };
}

function updateScreen(side) {
    const screen = document.getElementById(`${side}-screen`);
    screen.textContent = (side === 'left' ? leftInput : rightInput) || '0';
}

function addNumber(side, num) {
    if (!gameActive) return;
    
    if (side === 'left') {
        if (leftInput.length < 5) {
            leftInput += num;
            updateScreen('left');
        }
    } else {
        if (rightInput.length < 5) {
            rightInput += num;
            updateScreen('right');
        }
    }
}

function clearInput(side) {
    if (side === 'left') {
        leftInput = '';
        updateScreen('left');
    } else {
        rightInput = '';
        updateScreen('right');
    }
}

function toggleNegative(side) {
    if (side === 'left') {
        if (leftInput.startsWith('-')) {
            leftInput = leftInput.substring(1);
        } else if (leftInput !== '') {
            leftInput = '-' + leftInput;
        }
        updateScreen('left');
    } else {
        if (rightInput.startsWith('-')) {
            rightInput = rightInput.substring(1);
        } else if (rightInput !== '') {
            rightInput = '-' + rightInput;
        }
        updateScreen('right');
    }
}

function displayQuestions() {
    if (!gameActive) return;
    
    leftQuestion = generateQuestion();
    rightQuestion = generateQuestion();
    
    document.getElementById('left-question').textContent = leftQuestion.question;
    document.getElementById('right-question').textContent = rightQuestion.question;
    
    leftInput = '';
    rightInput = '';
    updateScreen('left');
    updateScreen('right');
    
    document.getElementById('left-feedback').textContent = '';
    document.getElementById('right-feedback').textContent = '';
    document.getElementById('left-feedback').className = 'calc-feedback';
    document.getElementById('right-feedback').className = 'calc-feedback';
}

function checkAnswer(side) {
    if (!gameActive) return;
    
    const feedbackDiv = document.getElementById(`${side}-feedback`);
    const userInput = side === 'left' ? leftInput : rightInput;
    const userAnswer = parseInt(userInput);
    const correctAnswer = side === 'left' ? leftQuestion.answer : rightQuestion.answer;
    
    if (userInput === '' || isNaN(userAnswer)) {
        feedbackDiv.textContent = 'أدخل رقم!';
        feedbackDiv.className = 'calc-feedback wrong';
        if (side === 'left') {
            leftInput = '';
            updateScreen('left');
        } else {
            rightInput = '';
            updateScreen('right');
        }
        return;
    }
    
    if (userAnswer === correctAnswer) {
        feedbackDiv.textContent = '✓ صحيح';
        feedbackDiv.className = 'calc-feedback correct';
        
        if (side === 'left') {
            ropePosition += PULL_AMOUNT;
            leftScore++;
        } else {
            ropePosition -= PULL_AMOUNT;
            rightScore++;
        }
        
        updateRope();
        updateScore();
        checkWinner();
        
        if (gameActive) {
            setTimeout(() => {
                if (side === 'left') {
                    leftQuestion = generateQuestion();
                    document.getElementById('left-question').textContent = leftQuestion.question;
                    leftInput = '';
                    updateScreen('left');
                } else {
                    rightQuestion = generateQuestion();
                    document.getElementById('right-question').textContent = rightQuestion.question;
                    rightInput = '';
                    updateScreen('right');
                }
                feedbackDiv.textContent = '';
                feedbackDiv.className = 'calc-feedback';
            }, 300);
        }
        
    } else {
        feedbackDiv.textContent = '✗ خطأ';
        feedbackDiv.className = 'calc-feedback wrong';
        if (side === 'left') {
            leftInput = '';
            updateScreen('left');
        } else {
            rightInput = '';
            updateScreen('right');
        }
    }
}

function updateRope() {
    if (ropePosition < 0) ropePosition = 0;
    if (ropePosition > 100) ropePosition = 100;
    
    const ropeCenter = document.getElementById('rope-center');
    const ropeIndicator = document.getElementById('rope-indicator');
    
    ropeCenter.style.left = `${ropePosition}%`;
    ropeIndicator.textContent = `${Math.round(ropePosition)}%`;
    
    if (ropePosition < 40) {
        ropeIndicator.style.color = '#e74c3c';
    } else if (ropePosition > 60) {
        ropeIndicator.style.color = '#3498db';
    } else {
        ropeIndicator.style.color = '#f1c40f';
    }
}

function updateScore() {
    document.getElementById('left-score').textContent = leftScore;
    document.getElementById('right-score').textContent = rightScore;
}

function checkWinner() {
    const winnerMessage = document.getElementById('winner-message');
    const resetBtn = document.getElementById('reset-btn');
    
    if (ropePosition <= WIN_POSITION_MIN) {
        winnerMessage.textContent = '🎉 فريق اليسار فاز! 🎉';
        winnerMessage.style.color = '#e74c3c';
        endGame();
        resetBtn.style.display = 'block';
    } else if (ropePosition >= WIN_POSITION_MAX) {
        winnerMessage.textContent = '🎉 فريق اليمين فاز! 🎉';
        winnerMessage.style.color = '#3498db';
        endGame();
        resetBtn.style.display = 'block';
    }
}

function endGame() {
    gameActive = false;
    document.querySelectorAll('.calc-buttons button').forEach(btn => {
        btn.disabled = true;
    });
}

function resetGame() {
    ropePosition = 50;
    leftScore = 0;
    rightScore = 0;
    leftInput = '';
    rightInput = '';
    gameActive = true;
    
    updateRope();
    updateScore();
    updateScreen('left');
    updateScreen('right');
    
    document.getElementById('winner-message').textContent = '';
    document.getElementById('reset-btn').style.display = 'none';
    
    document.querySelectorAll('.calc-buttons button').forEach(btn => {
        btn.disabled = false;
    });
    
    displayQuestions();
}

document.addEventListener('DOMContentLoaded', () => {
    displayQuestions();
    updateRope();
    updateScore();
});
