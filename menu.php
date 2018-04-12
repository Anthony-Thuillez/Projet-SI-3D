<?php
include "includes/header.php";
?>

<section class="Menu">
  <div class="container">
    <div class="Menu-MainContent">

      <article class="Menu-Content Discover">
        <h2 class="Menu-Title"><a class="Menu-Link" href="discover.php">Les composants d'une fusée</a></h2>
      </article>

      <article class="Menu-Content Quizz">
        <h2 class="Menu-Title"><a class="Menu-Link" href="quizz.php">Teste tes connaissances</a></h2>
        <p class="Menu-Text">et tente ta chance pour participer au prochain lancement.</p>
      </article>

    </div>
  </div>
</section>

<script type="text/javascript">
var discover= document.querySelector('.Discover');
discover.setAttribute('onclick', 'location.href = "discover.php"');

var quizz= document.querySelector('.Quizz');
quizz.setAttribute('onclick', 'location.href = "quizz.php"');

</script>
<?php
include "includes/footer.php";
?>
