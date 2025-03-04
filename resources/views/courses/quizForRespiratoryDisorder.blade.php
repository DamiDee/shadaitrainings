<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Respiratory Disorder</title>
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
            question: "1. The normal rate of respiration is to breaths per minute.",
            a: "A.  6-10",
            b: "B.  25-30",
            c: "C. 12-20",
            d: "D. 35-40",
            correct: "c"
        },
        {
            question: "2. People with HIV or compromised immune systems are already sick, so they cannot get TB.",
            a: "A. true",
            b: "B. false",
            c: "C. i don't know",
            d: "D. none of the above",
            correct: "b"
        },
        {
            question: "3. The main function of the respiratory system is to inhale oxygen into the lungs, transfer the oxygen to the blood, and exhale carbon dioxide. ",
            a: "A. true",
            b: "B. false",
            c: "C. i don't know",
            d: "D. none of the above",
            correct: "a"
        },
        {
            question: "4. Tuberculosis is an airborne disease carried on mucous droplets. ",
            a: "A. true",
            b: "B. false",
            c: "C. i don't know",
            d: "D. none of the above",
            correct: "a"
        },
        {
            question: "5. Asthma can affect people of any age.",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "6. Tuberculosis is spread through casual contact such as handshaking.",
            a: "true",
            b: "false",
            c: "I don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "7. Two things that will help prevent the spread of pneumonia and flu are:____________________ and immunization. ",
            a: "A. Vaccination",
            b: "B. Handwashing",
            c: "C. Quarantine",
            d: "D. Antibiotics",
            correct: "b"
        },
        {
            question: "8. Tuberculosis is the leading cause of death in the United States.",
            a: "true",
            b: "false",
            c: "i don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "9. Your age, sex, or where you were born does not affect your risk for TB.",
            a: "false",
            b: "true",
            c: "i don't know",
            d: "none of the above",
            correct: "a"
        },
        {
            question: "10. Clients with COPD should not exercise.",
            a: "true",
            b: "false",
            c: "i don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "11. A positive PPD test means you have active TB. There is no need for further testing to confirm the results.",
            a: "true",
            b: "false",
            c: "i don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "12. In a facility, when leaving the isolation room, a regular surgical mask should be worn by the person with active TB.",
            a: "true",
            b: "false",
            c: "i don't know",
            d: "none of the above",
            correct: "a"
        },
        {
            question: "13. TB can be diagnosed from a deep cough sputum specimen taken before bedtime.",
            a: "false",
            b: "true",
            c: "i don't know",
            d: "none of the above",
            correct: "a"
        },
        {
            question: "14. TB infection and TB disease is the same thing.",
            a: "true",
            b: "false",
            c: "i don't know",
            d: "none of the above",
            correct: "b"
        },
        {
            question: "15. The Mantoux or PPD skin test is done on the upper arm muscle.",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "b"
        },
        {
            question: "16. An individual with inactive TB will have a positive skin test but no symptoms.",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "a"
        },
        {
            question: "17. When a patient goes home after being diagnosed with active TB and put on medication, they can go with the family grocery shopping.",
            a: "True",
            b: "False",
            c: "I don't know",
            d: "None of the above",
            correct: "b"
        },
        {
            question: "18. Which of the following symptoms should be reported to a supervisor?",
            a: "A. Cough, shortness of breath, cyanosis",
            b: "B. Respiratory rate of 16 and regular",
            c: "C. Relaxing and visualizing",
            d: "D. none of the above",
            correct: "a"
        },
        {
            question: "19. A client who has difficulty with ADLs because of shortness of breath might be advised to:",
            a: "A. Drink less water.",
            b: "B. Use pursed-lip breathing and take frequent breaks",
            c: "C. Let someone else do everything for them.",
            d: "D. none of the above",
            correct: "b"
        },
        {
            question: "20. Which of the following can cause breathing problems for a client with a lung disorder?",
            a: "A. Perfume",
            b: "B. Dust",
            c: "C. Humidity",
            d: "D. All of the above",
            correct: "d"
        },
        {
            question: "21. Clients with COPD often suffer from depression, anxiety, or forgetfulness due to:",
            a: "A. Old age",
            b: "B. Personality disorder",
            c: "C. Lack of oxygen",
            d: "D. All of the above",
            correct: "c"
        },
        {
            question: "22. Which of the following drugs are not used for treatment of TB?",
            a: "A. Isoniazid",
            b: "B. Ethambutol",
            c: "C. Rifampin",
            d: "D. They are all used for treatment of TB",
            correct: "d"
        },
        {
            question: "23. Signs and symptoms of TB include:",
            a: "A. Coughing up blood, chest pain, sneezing",
            b: "B. Long term cough, chest pain, coughing up blood",
            c: "C. Chest pain, shortness of breath, migraine headaches",
            d: "D. Long term coughing, coughing up blood, increased appetite",
            correct: "b"
        },
        {
            question: "24. The side effects of medication taken for TB include:",
            a: "A. Yellowish eyes or skin",
            b: "B. Abdominal pain",
            c: "C. Increased symptoms with alcohol use",
            d: "D. All of the above",
            correct: "d"
        },
        {
            question: "25. It is important to use alternate birth control methods when:",
            a: "A. Inactive TB is present",
            b: "B. Exposed to TB",
            c: "C. taking Rifampin to treat TB",
            d: "D. none of the above",
            correct: "c"
        },
        
        {
            question: "26. TB is:",
            a: "A. Preventable",
            b: "B. Treatable",
            c: "C. Dangerous to those with a weakened immune system",
            d: "D. All of the above",
            correct: "d"
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
            ${percentage < 70 ? missedQuestions.map(q => `<li style="font-size: 25px">${q.question}<br><br>Your Answer: ${q.yourAnswer}<br><br></li>`).join('') : ''}
        </ol>
        ${percentage >= 70 ? '<button><a href="{{ route("showCertForRespiratoryDisorder") }}">Generate Certificate</a></button>' : ''}
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
