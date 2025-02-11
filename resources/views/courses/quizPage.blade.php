<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Simple Quiz App</title>
    <style>
        body {
            background-color: #849512;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        #quiz-container, #summary-container {
            background: #fff;
            max-width: 1000px;
            max-height: 800px;
           
            width: 100%;
            padding: 20px;
            
            padding-left: 80px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: auto;
        }
        
        ul {
            list-style: none;
            padding: 0;
        }
        
        li {
            margin-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        
        .button{
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer; 
            transition-duration: 0.4s;
            margin-left: 20px;
        }
        
        #summary-container button {
            background-color: #4CAF50;
            color: #fff;
        }
        #result-button{
          
        }

        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .answer {
            transform: scale(2.5); 
            margin-right: 15px;
            margin-bottom: 30px;
        }
        #summary-container #result-button {
            background-color: #4CAF50;
            color: #fff;
        }
        #button-div {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.4s;
            margin-left: 20px;
          }
    </style>
</head>
<body>
    <div id="quiz-container">
        <h2 id="question" style="font-size: 40px;"></h2>
        <ul>
            <li>
                <input type="radio" id="a" name="answer" class="answer" />
                <label id="a_text" for="a" style="font-size: 30px;"></label>
            </li>
            <li>
                <input type="radio" id="b" name="answer" class="answer" />
                <label id="b_text" for="b" style="font-size: 30px;"></label>
            </li>
            <li>
                <input type="radio" id="c" name="answer" class="answer" />
                <label id="c_text" for="c" style="font-size: 30px;"></label>
            </li>
            <li>
                <input type="radio" id="d" name="answer" class="answer" />
                <label id="d_text" for="d" style="font-size: 30px;"></label>
            </li>
        </ul>
        <div class="btn-group" >
            <button id="prev" style="font-size: 18px;" class="button" onclick="prevQuestion()">Prev</button>
        <button id="next" style="font-size: 18px;" class="button" onclick="nextQuestion()">Next</button>
        <button id="submit" style="font-size: 18px;" class="button" onclick="submitQuiz()">Submit</button>
        </div>
        
        <div id="summary-container" style="display: none;">
            <h2 style="font-size: 24px;">Quiz Summary</h2>
            <p id="percentage" style="font-size: 18px;"></p>
            <ul id="missed-questions" style="font-size: 18px;"></ul>
            <div id="button-div" onclick="tryAgain()" style="font-size: 20px; padding: 15px; margin: 15px; cursor: pointer; background-color: #4CAF50; color: #fff; border: none; border-radius: 5px;">Try Next</div>
        </div>    
    </div>
    <script>
        const quizData = [
        {
            question: "1. When breathing is normal, inhaling causes ___________ to be drawn into the lungs.",
            a: "A. Carbon",
            b: "B. Oxygen",
            c: "C. Carbon dioxide",
            d: "D. Hydrogen",
            correct: "b"
        },
        {
            question: "2. Exhaling releases ____________________ ____________________from the lungs. ",
            a: "A. Oxygen",
            b: "B. Carbon dioxide",
            c: "C. Hydrogen and methane",
            d: "D. Nitrous oxide and sulfur dioxide",
            correct: "b"
        },
        {
            question: "3. People may need short-term oxygen therapy for ____________________________,  ____________________, ____________________, and _____________________.",
            a: "A. Diabetes, hypertension, and obesity",
            b: "B. Allergies, sinusitis, and ear infections",
            c: "C. Arthritis, migraines, and insomnia",
            d: "D. Asthma, pneumonia, bronchitis and severe allergies",
            correct: "d"
        },
        {
            question: "4. Three types of oxygen delivery systems are used. They are:___________________, ____________________, and ______________________",
            a: "A. Compressed gas, liquid oxygen, and oxygen concentrator",
            b: "B. Nitrous oxide, carbon dioxide, and helium",
            c: "C. Solid oxygen, gaseous oxygen, and liquid nitrogen",
            d: "D. Oxygen mask, nasal cannula, and tracheostomy tube",
            correct: "a"
        },
        {
            question: "5. It is safe to use electric razors and hair dryers in areas where oxygen is in use.True or False",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "b"
        },
        {
            question: "6. You should not adjust the rate of oxygen flow unless the nurse or doctor directs you to do so. True or False",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "a"
        },
        {
            question: "7. If a fire occurs, oxygen should be turned off immediately. True or False ",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "a"
        },
        {
            question: "8. If a resident is getting too much oxygen, these signs may be noticed (name three):  __________________, __________________, and ____________________.",
            a: "A. Increased energy, rapid heartbeat, and heightened senses",
            b: "B. Headaches, slurred speech, and sleepiness",
            c: "C. Dry mouth, excessive sweating, and restlessness",
            d: "D. Nausea, blurred vision, and muscle cramps",
            correct: "b"
        },
        {
            question: "9. If a resident is not getting enough oxygen, these signs may be noticed (name three):  __________________, __________________, and ____________________",
            a: "A. Increased appetite, improved concentration, and heightened energy",
            b: "B. Muscle stiffness, excessive sweating, and rapid eye movements",
            c: "C. Difficult, irregular breathing; restlessness or anxiety; and tiredness or drowsiness",
            d: "D. Increased appetite, improved concentration, and heightened energy",
            correct: "c"
        },
        {
            question: "10. You should report signs or symptoms of too little or too much oxygen immediately.  True or False",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "a"
        },
        {
            question: "11. Portable tanks should not leave the building. True or False.",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "b"
        },
        {
            question: "12. Invert the nasal cannula in ______________________ to check if oxygen is flowing.",
            a: "A. Air",
            b: "B. Chemical",
            c: "C. Oil",
            d: "D. Water",
            correct: "d"
        },
        {
            question: "13. If water in the humidifier bottle is below the fill line, refill it to the line with  ____________________ ____________________.",
            a: "A. Water purified through boiling",
            b: "B. Sterile or distilled water",
            c: "C. Filtered spring water",
            d: "D. Tap water",
            correct: "b"
        },
        {
            question: "14. If oxygen tank supplies are low, oxygen can usually be delivered within an hour or  two of re-ordering. True or False",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "b"
        },
        {
            question: "15. A sign is usually placed on or near the door of a room or apartment to alert visitors  that oxygen is in use. True or False",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "a"
        }
    ];

    const quizContainer = document.getElementById('quiz-container');
    const summaryContainer = document.getElementById('summary-container');
const answerEls = document.querySelectorAll('.answer');
const questionEl = document.getElementById('question');
const a_text = document.getElementById('a_text');
const b_text = document.getElementById('b_text');
const c_text = document.getElementById('c_text');
const d_text = document.getElementById('d_text');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const submitBtn = document.getElementById('submit');
const percentageEl = document.getElementById('percentage');
const missedQuestionsEl = document.getElementById('missed-questions');
const resultButton = document.getElementById('result-button');

let currentQuiz = 0;
let selectedAnswers = new Array(quizData.length).fill(null);
let correctAnswers = 0;
loadQuiz();

function loadQuiz() {
    const currentQuizData = quizData[currentQuiz];

    questionEl.innerText = currentQuizData.question;
    a_text.innerText = currentQuizData.a;
    b_text.innerText = currentQuizData.b;
    c_text.innerText = currentQuizData.c;
    d_text.innerText = currentQuizData.d;
answerEls.forEach(answerEl => {
        answerEl.checked = false;
    });
    // Set the selected answer if it exists
    const selectedAnswer = selectedAnswers[currentQuiz];
    if (selectedAnswer !== null) {
        const selectedInput = document.getElementById(selectedAnswer);
        if (selectedInput) {
            selectedInput.checked = true;
        }
    }
    

    // Disable Prev button on the first question
    prevBtn.disabled = currentQuiz === 0;

    // Disable Next button on the last question
    nextBtn.disabled = currentQuiz === quizData.length - 1;
}

function getSelected() {
    let answer = null;
    answerEls.forEach((answerEl, index) => {
        if (answerEl.checked) {
            answer = String.fromCharCode(97 + index); // Convert index to A, B, C, D
        }
    });
    return answer;
}

function prevQuestion() {
    selectedAnswers[currentQuiz] = getSelected();
    currentQuiz--;
    loadQuiz();
}

function nextQuestion() {
    selectedAnswers[currentQuiz] = getSelected();
    currentQuiz++;
    loadQuiz();
}

function submitQuiz() {
    selectedAnswers[currentQuiz] = getSelected();

    // Check answers and calculate score
    correctAnswers = 0;
    for (let i = 0; i < quizData.length; i++) {
        if (selectedAnswers[i] === quizData[i].correct) {
            correctAnswers++;
        }
    }

    // Calculate percentage
    const percentage = (correctAnswers / quizData.length) * 100;

    // Display the summary
    displaySummary(percentage);
}

function displaySummary() {
    const percentage = (correctAnswers / quizData.length) * 100;
    const missedQuestions = [];

    for (let i = 0; i < quizData.length; i++) {
        if (selectedAnswers[i] !== quizData[i].correct) {
            missedQuestions.push({
                question: quizData[i].question,
                yourAnswer: quizData[i][selectedAnswers[i]],
                correctAnswer: quizData[i][quizData[i].correct]
            });
        }
    }
    
    quizContainer.innerHTML = `
        <h1>Test Summary</h1>
        <h1 style="font-size:30px">${percentage >= 70 ? 'Congratulations!' : 'Try Again'}</h1>
        <p style="font-size:30px">You scored ${percentage.toFixed(2)}%</p>
        <p style="font-size:30px">Required Percentage: 70%</p>
        ${percentage < 70 && missedQuestions.length > 0 ? '<h3>Questions Missed:</h3>' : ''}
        <ol>
            ${percentage < 70 ? missedQuestions.map(q => `<li style="font-size: 25px">${q.question}<br><br>Your Answer: ${q.yourAnswer} <br><br></li>`).join('') : ''}
        </ol>
        ${percentage >= 70 ? '<button><a href="{{ route("showCertForOxygenTherapy") }}">Generate Certificate</a></button>' : ''}
        ${percentage < 70 ? '<button id = "button-div" onclick="location.reload()">Try Again</button>' : ''}
    `;
}

function generateCertificate() {
    // Your code to generate a certificate
    alert('Certificate generated!');
}

function tryAgain() {
    // Reset quiz state
    currentQuiz = 0;
    selectedAnswers = new Array(quizData.length).fill(null);
    correctAnswers = 0;

    // Hide summary container
    summaryContainer.style.display = 'none';

    // Show quiz container
    quizContainer.style.display = 'block';

    // Load the quiz
    loadQuiz();
}

function resultAction() {
    // Modify the function based on the action you want to take
    const percentage = (correctAnswers / quizData.length) * 100;

    if (percentage >= 70) {
        generateCertificate();
    } else {
        tryAgain();
    }
}
    </script>
</body>
</html>
