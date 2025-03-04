<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quiz for Dementia</title>
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
        <h2 id="question" style="font-size: 20px;"></h2>
        <ul>
            <li>
                <input type="radio" id="a" name="answer" class="answer" />
                <label id="a_text" for="a" style="font-size: 20px;"></label>
            </li>
            <li>
                <input type="radio" id="b" name="answer" class="answer" />
                <label id="b_text" for="b" style="font-size: 20px;"></label>
            </li>
            <li>
                <input type="radio" id="c" name="answer" class="answer" />
                <label id="c_text" for="c" style="font-size: 20px;"></label>
            </li>
            <li>
                <input type="radio" id="d" name="answer" class="answer" />
                <label id="d_text" for="d" style="font-size: 20px;"></label>
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
            question: "1. In the case study about Mr. Blair, the caregivers helped him by providing what?______",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. provide strong visual cues (contrasting colors on things the resident uses)",
            d: "D. ask them to give you regular reports on the activities in the facility, giving them a feeling of responsibility similar to the work they did in their career",
            correct: "c"
        },
        {
            question: "2. We can help people with dementia by doing what?__________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. treat them with respect",
            correct: "a"
        },
        {
            question: "3. Many times a person with dementia behaves in a difficult fashion because he or she is trying to:___________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. cope with or compensate for lost abilities",
            correct: "d"
        },
        {
            question: "4. When a person with dementia can't remember how to get in to a car, or starts to brush his hair with his toothbrush, which of the six 'Results of Dementia' is causing the problem?",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. watch for loss of muscle organization",
            correct: "d"
        },
        {
            question: "5. You should do this when starting a conversation with a resident with dementia_________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. treat them with respect",
            correct: "c"
        },
        {
            question: "6. When a person can't think of a word, or the words come out wrong or in the wrong order, they are experiencing which of the six 'Results of Dementia?'",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. watch for language Loss",
            d: "D. treat them with respect",

            correct: "c"
        },
        {
            question: "7. This is one way to help a person with dementia perform a task_________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. treat them with respect",
            correct: "b"
        },
        {
            question: "8. It is important that persons with dementia be allowed to do this as much as possible:",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. help them make decisions and retain control over their lives",
            correct: "d"
        },
        {
            question: "9. It is best to use these kinds of questions when dealing with patients with dementia_________",
            a: "A. watch for loss of muscle organization",
            b: "B. help them make decisions and retain control over their lives",
            c: "C. ask them to give you regular reports on the activities in the facility, giving them a feeling of responsibility similar to the work they did in their career",
            d: "D. ask direct,closed questions such as 'Would you like to wear this red dress today?' instead of open-ended questions like 'What would you like to wear today?'",
            correct: "d"
        },
        {
            question: "10. Dementia is a condition that is characterized by__________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. ask them to quit complaining and try to be happy",
            c: "C. watch for loss of intellectual abilities, and personality changes",
            d: "D. cope with or compensate for lost abilities",
            correct: "c"
        },
        {
            question: "11. We should try not to embarrass people with dementia but instead to________",
            a: "A. put ourselves in their shoes, trying to understand what they feel and think",
            b: "B. tell the person how to do each step in simple language, one thing at a time",
            c: "C. address the person by name, and briefly introduce yourself and state the purpose of your visit",
            d: "D. treat them with respect",
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
        ${percentage >= 70 ? '<button><a href="{{ route("showCertForDementia") }}">Generate Certificate</a></button>' : ''}
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
