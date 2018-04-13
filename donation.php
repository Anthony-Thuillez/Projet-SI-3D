<?php
include "includes/header.php";
?>
<img class="Logo" src="img/logo.png" alt="logo">
<section class="Donation-Page">

  <div class="container">
    <h2 class="Donation-title">Félicitations !</h2>

      <span class="Donation-ScoreText">Vous participez maintenant au tirage au sort du 20/20/20, vous recevrez un mail si vous avez gagné.</span>

    <div class="Donation-Button">
      <p class="Donation-ButtonText">Revenir au menu</p>
    </div>
  </div>
</section>
<script type="text/javascript">
var donationBtn= document.querySelector('.Donation-Button');
donationBtn.setAttribute('onclick', 'location.href = "menu.php"');

</script>
<?php
include "includes/footer.php";
?>
