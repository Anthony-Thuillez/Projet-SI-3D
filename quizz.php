<?php
include "includes/header.php";
?>

<section class="Quizz-Page">
  <div class="container">
    <div class="Quizz-MainContent">

    <div class="Quizz-3D">
        <div id="gameContainer" style="width: 100%; height: 100%; margin: auto"></div>
    </div>

    <div class="Quizz-Content">
      <section class="game">
        <div class="quizzGame">
          <div class="questionNumber">Question <span class="numberFocus"></span> / 12</div>
          <p class="question"> La poussée de l’Heavy Falcon est de 4245KN</p>
          <div class="yesnoContainer">
            <div class="vrai"><img class="yes" src="assets/img/yes_white.svg" /> </div>
            <div class="faux"><img class="no" src="assets/img/no_white.svg" /> </div>
          </div>
          <p class="answer"></p>
          <div class="suivant">Suivant</div>
        </div>
      </section>
    </div>

    </div>
  </div>
</section>

<script src="dataQuizz.js"></script>
<script src="app.js"></script>

<?php
include "includes/footer.php";
?>
