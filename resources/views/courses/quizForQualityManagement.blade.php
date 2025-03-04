<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Quality Management</title>
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
            <li>
                <input type="radio" id="e" name="answer" class="answer" />
                <label id="e_text" for="e" style="font-size: 30px;"></label>
            </li>
            <li>
                <input type="radio" id="f" name="answer" class="answer" />
                <label id="f_text" for="f" style="font-size: 30px;"></label>
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
            question: "1. Match the Definition to the Term __________ Exploitation",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "a"
        },
        {
            question: "2. Match the Definition to the Term __________ Neglect",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "c"
        },
        {
            question: "3. Match the Definition to the Term __________Critical Incident",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "e"
        },
        {
            question: "4. Match the Definition to the Term __________Abuse",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "f"
        },
        {
            question: "5. Match the Definition to the Term __________Service Interruption",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "d"
        },
        {
            question: "6. Match the Definition to the Term __________Investigation",
            a: "A. An act of depriving, defrauding, or otherwise obtaining the personal property of a participant in an unjust or cruel manner, against one’s will, or without one’s consent or knowledge for the benefit of self or others.",
            b: "B. The steps necessary to determine if a critical incident has occurred, to determine if suspected abuse, neglect, abandonment, or exploitation requiring the involvement of protective services is involved.",
            c: "C. The failure to provide an individual the reasonable care that he or she requires, including but not limited to food, clothing, shelter, medical care, personal hygiene, and protection from harm.",
            d: "D. Any event that results in the participant’s inability to receive services that places his or her health, and/or safety at risk. This includes involuntary termination by the provider agency and failure of the participant’s back-up plan.",
            e: "E. An occurrence of an event that jeopardizes the participant’s health or welfare.",
            f: "F. An act or omission that willfully deprives a participant of rights or human dignity, or which may cause or causes actual physical injury or emotional harm to a participant.",
            correct: "b"
        },
        {
            question: "7. Which of the following incidents should be reported as critical incidents?",
            a: "A. Pre-scheduled hospitalizations",
            b: "B. Complaints",
            c: "C. Death or serious injury",
            d: "D. Program fraud and financial abuse",
            e: "E. Provider and staff member misconduct",
            f: "F. All of the above",
            correct: "b"
        },
        {
            question: "8. All critical incident reports must include:",
            a: "A. Reporter information",
            b: "B. Participant demographics",
            c: "C. OLTL program information",
            d: "D. Event details and type & Description of the incident",
            e: "E. Actions taken to immediately secure the participant’s health and welfare",
            f: "F. All of the above",
            correct: "f"

        },
        {
            question: "9. When faced with suspected abuse and neglect, the first thing anyone should do is_______ ",
            a: "A. Report it to the authorities",
            b: "B. Ignore it",
            c: "C. Ensure that the victim is safe",
            d: "D. Discuss it with friends",
            e: "E. All of the above",
            f: "F. None of the above",
            correct: "c"
        },
    
        {
            question: "10. If a case involves sexual abuse, serious injury, serious bodily injury, or suspicious death, you must first make",
            a: "A. Education, counseling, and support groups",
            b: "B. Listening, teaching caregiving skills, and communicating.",
            c: "C. Shutting off everyone that comes around",
            d: "D. An oral report",
            e: "E. All of the above",
            f: "F. None of the above",
            correct: "b"
        },
        {
            question: "11. Within _________ hours of making the oral report, submit a written report to law enforcement.",
            a: "A. 24",
            b: "B. 36",
            c: "C. 48",
            d: "D. 72",
            e: "E. 96",
            f: "F. 120",
            correct: "c"
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
const e_text = document.getElementById('e_text');
const f_text = document.getElementById('f_text');
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
    e_text.innerText = currentQuizData.e;
    f_text.innerText = currentQuizData.f;
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
        ${percentage >= 70 ? '<button id="button-div"><a href="{{ route("showCertForReportingIncident") }}">Generate Certificate</a></button>' : ''}
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
