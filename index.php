<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لعبة شد الحبل</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="game-container">
        <h1>🏆 لعبة شد الحبل 🏆</h1>
        <h1>🏆 لعبة شد الحبل 🏆</h1>
        
        <div class="score-board">
            <div class="score left-score">
                <span>فريق اليسار</span>
                <span id="left-score">0</span>
            </div>
            <div class="center-indicator">
                <div class="rope-indicator" id="rope-indicator">50%</div>
            </div>
            <div class="score right-score">
                <span>  ف    ريق اليمين</span>
                <span id="right-score">0</span>
            </div>
        </div>

        <div class="tug-of-war">
            <div class="team left-team">
                <div class="players">
                    <div class="player-svg">
                        <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="20" r="15" fill="#f4c2a1" class="head"/>
                            <rect x="35" y="35" width="30" height="40" rx="5" fill="#e74c3c" class="body"/>
                            <line x1="35" y1="45" x2="10" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="65" y1="45" x2="90" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="40" y1="75" x2="35" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <line x1="60" y1="75" x2="65" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <circle cx="45" cy="18" r="2" fill="#333" class="eye"/>
                            <circle cx="55" cy="18" r="2" fill="#333" class="eye"/>
                            <path d="M 45 25 Q 50 28 55 25" stroke="#333" stroke-width="1.5" fill="none" class="mouth"/>
                        </svg>
                    </div>
                    <div class="player-svg">
                        <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="20" r="15" fill="#f4c2a1" class="head"/>
                            <rect x="35" y="35" width="30" height="40" rx="5" fill="#e74c3c" class="body"/>
                            <line x1="35" y1="45" x2="10" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="65" y1="45" x2="90" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="40" y1="75" x2="35" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <line x1="60" y1="75" x2="65" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <circle cx="45" cy="18" r="2" fill="#333" class="eye"/>
                            <circle cx="55" cy="18" r="2" fill="#333" class="eye"/>
                            <path d="M 45 25 Q 50 28 55 25" stroke="#333" stroke-width="1.5" fill="none" class="mouth"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            <div class="rope-container">
                <div class="rope" id="rope">
                    <div class="rope-center" id="rope-center"></div>
                </div>
                <div class="marker" id="marker"></div>
            </div>
            
            <div class="team right-team">
                <div class="players">
                    <div class="player-svg">
                        <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="20" r="15" fill="#f4c2a1" class="head"/>
                            <rect x="35" y="35" width="30" height="40" rx="5" fill="#3498db" class="body"/>
                            <line x1="35" y1="45" x2="10" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="65" y1="45" x2="90" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="40" y1="75" x2="35" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <line x1="60" y1="75" x2="65" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <circle cx="45" cy="18" r="2" fill="#333" class="eye"/>
                            <circle cx="55" cy="18" r="2" fill="#333" class="eye"/>
                            <path d="M 45 25 Q 50 28 55 25" stroke="#333" stroke-width="1.5" fill="none" class="mouth"/>
                        </svg>
                    </div>
                    <div class="player-svg">
                        <svg viewBox="0 0 100 120" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="20" r="15" fill="#f4c2a1" class="head"/>
                            <rect x="35" y="35" width="30" height="40" rx="5" fill="#3498db" class="body"/>
                            <line x1="35" y1="45" x2="10" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="65" y1="45" x2="90" y2="55" stroke="#f4c2a1" stroke-width="6" stroke-linecap="round" class="arm"/>
                            <line x1="40" y1="75" x2="35" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <line x1="60" y1="75" x2="65" y2="110" stroke="#34495e" stroke-width="7" stroke-linecap="round" class="leg"/>
                            <circle cx="45" cy="18" r="2" fill="#333" class="eye"/>
                            <circle cx="55" cy="18" r="2" fill="#333" class="eye"/>
                            <path d="M 45 25 Q 50 28 55 25" stroke="#333" stroke-width="1.5" fill="none" class="mouth"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="calculators">
            <div class="calculator left-calculator">
                <div class="calc-display">
                    <div class="calc-screen" id="left-screen">0</div>
                </div>
                <div class="calc-question" id="left-question"></div>
                <div class="calc-buttons">
                    <button class="btn-num" onclick="addNumber('left', '7')">7</button>
                    <button class="btn-num" onclick="addNumber('left', '8')">8</button>
                    <button class="btn-num" onclick="addNumber('left', '9')">9</button>
                    <button class="btn-clear" onclick="clearInput('left')">C</button>
                    
                    <button class="btn-num" onclick="addNumber('left', '4')">4</button>
                    <button class="btn-num" onclick="addNumber('left', '5')">5</button>
                    <button class="btn-num" onclick="addNumber('left', '6')">6</button>
                    <button class="btn-submit" onclick="checkAnswer('left')">✓</button>
                    
                    <button class="btn-num" onclick="addNumber('left', '1')">1</button>
                    <button class="btn-num" onclick="addNumber('left', '2')">2</button>
                    <button class="btn-num" onclick="addNumber('left', '3')">3</button>
                    <button class="btn-negative" onclick="toggleNegative('left')">+/-</button>
                    
                    <button class="btn-zero" onclick="addNumber('left', '0')">0</button>
                </div>
                <div class="calc-feedback" id="left-feedback"></div>
            </div>

            <div class="calculator right-calculator">
                <div class="calc-display">
                    <div class="calc-screen" id="right-screen">0</div>
                </div>
                <div class="calc-question" id="right-question"></div>
                <div class="calc-buttons">
                    <button class="btn-num" onclick="addNumber('right', '7')">7</button>
                    <button class="btn-num" onclick="addNumber('right', '8')">8</button>
                    <button class="btn-num" onclick="addNumber('right', '9')">9</button>
                    <button class="btn-clear" onclick="clearInput('right')">C</button>
                    
                    <button class="btn-num" onclick="addNumber('right', '4')">4</button>
                    <button class="btn-num" onclick="addNumber('right', '5')">5</button>
                    <button class="btn-num" onclick="addNumber('right', '6')">6</button>
                    <button class="btn-submit" onclick="checkAnswer('right')">✓</button>
                    
                    <button class="btn-num" onclick="addNumber('right', '1')">1</button>
                    <button class="btn-num" onclick="addNumber('right', '2')">2</button>
                    <button class="btn-num" onclick="addNumber('right', '3')">3</button>
                    <button class="btn-negative" onclick="toggleNegative('right')">+/-</button>
                    
                    <button class="btn-zero" onclick="addNumber('right', '0')">0</button>
                </div>
                <div class="calc-feedback" id="right-feedback"></div>
            </div>
        </div>

        <div class="winner-message" id="winner-message"></div>
        <button class="reset-btn" onclick="resetGame()" style="display:none;" id="reset-btn">🔄 لعبة جديدة</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
