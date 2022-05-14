const quizData = [
  {
    question: "What is the full form of HTML?",
    a: "Hapertext Markup Languege",
    b: "Cascading Style Sheet",
    c: "Jason Object Notation",
    d: "Helicopter Terminals Mototboats Lamborginis",
    correct: "a",
  },
  {
    question: "What year was JavaScript Launched?",
    a: "1991",
    b: "1994",
    c: "1995",
    d: "None",
    correct: "c",
  },
  {
    question: "Inside which HTML element do we put the JavaScript?",
    a: "<script>",
    b: "<scripting>",
    c: "<js>",
    d: "<javascript>",
    correct: "c",
  },
  {
    question: "What is the most used programming language in 2022?",
    a: "Java",
    b: "C",
    c: "Puthon",
    d: "JavaScript",
    correct: "d",
  },
  {
    question: "Where is the correct place to insert a JavaScript?",
    a: "Both the <head> section and the <body> section are correct",
    b: "The <head> section",
    c: "The <body> section",
    d: "Outside the <body> section",
    correct: "a",
  },
  {
    question:
      "What is the correct syntax for referring to an external script called 'xxx.js?",
    a: "<script href=xxx.js>",
    b: "<script='xxx.js'>",
    c: "<script src='xxx.js'>",
    d: "<script name='xxx.js'>",
    correct: "c",
  },
];

//---------------------------------------------
const quiz = document.getElementById("quiz");
const answerEls = document.querySelectorAll(".answer");
const questionEl = document.getElementById("question");
const a_text = document.getElementById("a_text");
const b_text = document.getElementById("b_text");
const c_text = document.getElementById("c_text");
const d_text = document.getElementById("d_text");
const submitBtn = document.getElementById("submit");

let currentQuiz = 0;
let score = 0;

loadQuiz();

//----------------------------------
function loadQuiz() {
  deselectAnswers();

  const currentQuizData = quizData[currentQuiz];

  questionEl.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
  d_text.innerText = currentQuizData.d;
}

//----------------------------------
function getSelected() {
  let answer = undefined;

  answerEls.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });

  return answer;
}

//-------------------------------
function deselectAnswers() {
  answerEls.forEach((answerEl) => {
    answerEl.checked = false;
  });
}

//---------------------------------------------
submitBtn.addEventListener("click", () => {
  const answer = getSelected();
  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }
    currentQuiz++;
    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `
        <h2>You answered correctly at ${score}/${quizData.length} questions.</h2>
                
        <button onclick="location.reload()">Reload</button>
        `;
    }
  }
});
