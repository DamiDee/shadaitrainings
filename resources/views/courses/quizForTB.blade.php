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
            question: "1. Tuberculosis is an airborne disease carried on mucous droplets",
            a: "A.  True",
            b: "B.  False",
            c: "C.  I don't know",
            d: "D.  None of the above",
            correct: "a"
        },
        {
            question: "2. Tuberculosis is spread through casual contact such as hand shaking",
            a: "A.  True",
            b: "B.  False",
            c: "C.  I don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "3. Tuberculosis Is the leading cause of death in the United States.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "4. Your age, sex, or where you were born does not affect your risk for TB",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "5. When a patient goes home after being diagnosed with active TB and put on medication, they can go with the family grocery shopping.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },

        {
            question: "6. The Mantoux, or PPD skin test is done on the upper arm muscle.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "7. A positive PPD test means you have active TB. There is no need for further testing to confirm the results.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "8. BCG may affect the results of a PPD skin test.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "9. Signs and symptoms of TB include long‐term cough, chest pains, shortness of breath, and coughing up blood.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "10. TB infection and TB disease is the same thing.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "11. People with HIV or compromised Immune systems, are already sick so they cannot get TB.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "12. An individual with inactive TB will have a positive skin test but no symptoms.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "13. TB can be diagnosed from a deep cough sputum specimen taken before bedtime.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "14. Home Care Staff do not need to take any special precautions with their bags, equipment or clothing.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "15. In a facility, when leaving the isolation room, a regular surgical mask should be worn by the person with active TB.",
            a: "A.  True",
            b: "B.  False",
            c: "C.  i don't know",
            d: "D.  none of the above",
            correct: "a"
        },
        {
            question: "16. Which of the following drugs are not used for treatment of:",
            a: "A. Isoniazid",
            b: "B. Ethembutel",
            c: "C. Rifampln",
            d: "D. They are all used for treatment of TB",
            correct: "b"
        },
        {
            question: "17. Signs and symptoms of TB include:",
            a: "A. coughing up blood, chest pain, sneezing",
            b: "B. Long term cough, chest pain, coughing up blood",
            c: "C. Chest pain, shortness of breath, migraine headaches",
            d: "D. long term coughing, coughing up blood, increased appetite",
            correct: "b"
        },
        {
            question: "18. The side effects of medication taken for TB include:",
            a: "A. yellowish eyes or skin",
            b: "B. abdominal pain",
            c: "C. Increased symptoms with alcohol use",
            d: "D. All of the above",
            correct: "b"
        },
        {
            question: "19. It is important to use alternate birth control methods when",
            a: "A. Inactive TB is present",
            b: "B. Exposed to TB",
            c: "C. Taking Rifampin to treat TB",
            d: "D. None of the above",
            correct: "b"
        },
        {
            question: "20. TB is:",
            a: "A. preventable",
            b: "B. treatable",
            c: "C.  dangerous to those with a weakened immune system",
            d: "D.  all of the above",
            correct: "b"
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
    const selectedAnswer = selectedAnswers[currentQuiz];
    if (selectedAnswer !== null) {
        const selectedInput = document.getElementById(selectedAnswer);
        if (selectedInput) {
            selectedInput.checked = true;
        }
    }
    prevBtn.disabled = currentQuiz === 0;
    nextBtn.disabled = currentQuiz === quizData.length - 1;
}

function getSelected() {
    let answer = null;
    answerEls.forEach((answerEl, index) => {
        if (answerEl.checked) {
            answer = String.fromCharCode(97 + index); 
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
    correctAnswers = 0;
    for (let i = 0; i < quizData.length; i++) {
        if (selectedAnswers[i] === quizData[i].correct) {
            correctAnswers++;
        }
    }
    const percentage = (correctAnswers / quizData.length) * 100;
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
            ${percentage < 70 ? missedQuestions.map(q => `<li style="font-size: 25px">${q.question}<br><br>Your Answer: ${q.yourAnswer}<br><br></li>`).join('') : ''}
        </ol>
        ${percentage >= 70 ? '<button><a href="{{ route("showCertForTB") }}">Generate Certificate</a></button>' : ''}
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
