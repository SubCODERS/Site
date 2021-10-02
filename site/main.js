const quizData = [
{
	question: "Что Вам больше нравится?",
	a: "Играть в футбол",
	b: "Писать картины",
	c: "Изучать историю своего города",
},
{
	question: "Какие черты характера Вам ближе?",
	a: "Командный человек",
	b: "Индивидуальная работа",
	c: "Самоотдача",
},
{
	question: "Какие качества Вы хотели бы в себе развить?",
	a: "Сила и ловкость",
	b: "Креативное мышление",
	c: "Познание в истории",
},
{
	question: "В чем новом Вы бы хотели себя попробовать?",
	a: "Дайвинг",
	b: "Написание статей",
	c: "Заняться волонтерством",
},
{
	question: "Чем бы Вы хотели заниматься?",
	a: "Спорт",
	b: "Искусство",
	c: "Социально-историческая деятельность",
},
];

const quiz = document.getElementById('quiz');
const answerElements = document.querySelectorAll('.answer');
const questionElement = document.getElementById('question');
const a_text = document.getElementById('a_text');
const b_text = document.getElementById('b_text');
const c_text = document.getElementById('c_text');
const submit = document.getElementById('submit');

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz(){
	deselectAnswers();

	const currentQuizData = quizData[currentQuiz];

	questionElement.innerText = currentQuizData.question;
	a_text.innerText = currentQuizData.a;
	b_text.innerText = currentQuizData.b;
	c_text.innerText = currentQuizData.c;
}

function deselectAnswers(){
	answerElements.forEach(answerEl => answerEl.checked = false)
}

function getSelected(){
	let answer;

	answerElements.forEach(answerEl => {
		if(answerEl.checked){
			answer = answerEl.id;
		};
	});

	return answer;
}

submit.addEventListener('click', () => {
	const answer = getSelected();
	currentQuiz++;

	if(currentQuiz < quizData.length){
		loadQuiz();
	}
	else{
		quiz.innerHTML = `<h2>Спасибо! Мы подобрали секции учитывая Ваш выбор. Ознакомиться с ними вы можете в личном кабинете</h2>
		<button id="close">Подвердить</button>
		`;
		let close = $("#close");
		console.log(close);
		close.on('click', function(e) {

			console.log(e);
			window.location.href = 'kabinet.php';
		});
	}
}
);

