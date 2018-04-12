var question = document.querySelector('.question');
var vrai = document.querySelector('.vrai');
var faux = document.querySelector('.faux');
var answer = document.querySelector('.answer');
var suivantBtn = document.querySelector('.suivant');
var numberFocus = document.querySelector('.numberFocus');
var yesSrc = document.querySelector('.yes');
var noSrc = document.querySelector('.no');
numberFocus.textContent = 1;
var randQuestion;
var currentQuestionIndex = 0;

function random() {
  currentQuestionIndex = Math.floor(Math.random() * tableauQuestion.length)
  randQuestion = tableauQuestion[currentQuestionIndex];
  question.textContent = randQuestion.question;
  vrai.addEventListener('click', checkBtn);
  faux.addEventListener('click', checkBtn);
  suivantBtn.addEventListener('click', suivantBtnCheck);
}

function checkBtn() {
  if (numberFocus.textContent >= 12) {
    suivantBtn.textContent = "Bravo ! Tu as terminé le jeu";
    suivantBtn.addEventListener('click', function() {
      window.location.href = "./infoperso.php";
    })
  }
  if (this.className == "vrai") {
    yesSrc.src = "assets/img/yes_blue.svg";
    this.style.backgroundColor = "white";
  } else {
    this.style.backgroundColor = "white";
    noSrc.src = "assets/img/no_blue.svg";

  }

  if (this.className == randQuestion.reponse) {
    answer.style.color = "#47FC49";
    answer.style.fontFamily = "montserrat"
    answer.textContent = "Bien joué !";
    suivantBtn.classList.add('suivantFlex');
  } else {
    answer.style.color = "#D0021B";
    answer.style.fontFamily = "montserrat"
    answer.innerHTML = randQuestion.verdict;
    suivantBtn.classList.add('suivantFlex');
  }
  faux.removeEventListener('click', checkBtn);
  vrai.removeEventListener('click', checkBtn);
}

function suivantBtnCheck() {
  if (numberFocus.textContent >= 12) {
    return;
  }
  yesSrc.src = "assets/img/yes_white.svg";
  noSrc.src = "assets/img/no_white.svg";
  tableauQuestion.splice(currentQuestionIndex, 1) // on coupe l'élement enregistrer dans la variable "currentQuestionIndex" qui correspond à la question generé
  numberFocus.textContent++;
  vrai.style.backgroundColor = "";
  faux.style.backgroundColor = "";
  answer.style.fontFamily = "montserrat"
  answer.style.color = "transparent";
  suivantBtn.classList.remove('suivantFlex');
  random();
};

random();
