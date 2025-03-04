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
            question: "1. A little blister on an elderly person’s skin is normal and nothing to be concerned about.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "b"
        },
        {
            question: "2. You should report a reddened area on the skin to the nurse or your supervisor if:",
            a: "A. It has a dark black or brown center.",
            b: "B. It doesn’t turn white under your thumb when you press on it.",
            c: "C. You remove all pressure from it and it still doesn’t return to a normal skin color after 20 minutes.",
            d: "D.  b and c",
            correct: "d"
        },
        {
            question: "3. You should encourage residents to have healthy skin by:",
            a: "A. Bathing frequently with soap and water.",
            b: "B. Only bathing occasionally.",
            c: "C. Using lots of powder in all the skin folds and creases.",
            d: "D. Staying clean, using lotion, eating well, drinking water, and exercising.",
            correct: "d"
        },
        {
            question: "4. When sitting in a chair for long periods, your patients should:",
            a: "A. Sit with knees higher than hips.",
            b: "B. Get up or shift their weight every 15 minutes.",
            c: "C. Stay there as long as possible.",
            d: "D. Avoid shifting their weight in the chair too much.",
            correct: "b"
        },
        {
            question: "5. Older people are at risk for pressure sores because:",
            a: "A. They eat too much.",
            b: "B. They bathe too often.",
            c: "C. The skin, the fatty tissue layer, and the blood vessel walls are thinner and more fragile.",
            d: "D. Their bones get sharper as they age.",
            correct: "c"
        },
        {
            question: "6. Changes in a person’s skin color could be a sign of illness..",
            a: "A. true",
            b: "B. false",
            c: "C. I don't know",
            d: "D. none of the above",
            correct: "a"
        },
        {
            question: "7. People who are in bed most of the time should keep the head of their bed raised as high as possible, because a sitting position is better for circulation than a lying position. ",
            a: "A. true",
            b: "B. false",
            c: "C. i don't know",
            d: "D. none of the above",
            correct: "b"
        },
        {
            question: "8. Older people tend to feel cold because:",
            a: "A. The fatty tissue layer is thinner and the blood vessels don’t expand and contract as well.",
            b: "B. They don’t wear enough clothes.",
            c: "C. Their internal thermostat doesn’t work anymore.",
            d: "D. none of the above",
            correct: "b"
        },
        {
            question: "9. Older people heal slowly because the skin is not getting enough oxygen and nutrition.",
            a: "A. false",
            b: "B. true",
            c: "C. i don't know",
            d: "D. none of the above",
            correct: "b"
        },
        {
            question: "10. People who have had strokes or are paralyzed must be watched closely for skin ulcers.",
            a: "A. true",
            b: "B. false",
            c: "C. i don't know",
            d: "D. none of the above",
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
        ${percentage >= 70 ? '<button><a href="{{ route("showCertForCareSkin") }}">Generate Certificate</a></button>' : ''}
        ${percentage < 70 ? '<button id = "button-div" onclick="location.reload()">Try Again</button>' : ''}
    `;
}

function generateCertificate() {
    alert('Certificate generated!');
}

function tryAgain() {
    currentQuiz = 0;
    selectedAnswers = new Array(quizData.length).fill(null);
    correctAnswers = 0;
    summaryContainer.style.display = 'none';
    quizContainer.style.display = 'block';
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
