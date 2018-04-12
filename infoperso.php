<?php
include "includes/header.php";
?><div class="all">


<div class="Quizz-3D">
    <div id="gameContainer" style="width: 100%; height: 100%; margin: auto"></div>
</div>
<section class="infoContainer">
  <form method="get" action="donation.php">
    <h1 class="title-info">Informations personnelles</h1>
    <p class="first-name-info">Quel est votre nom ? *</p>
    <div class="input-border"><input class="input-adjust" placeholder="Doe" type="text" value="yo" name="name"/></div>

    <p class="last-name-info">Quel est votre prénom ? *</p>
    <div class="input-border"><input class="input-adjust" placeholder="John" type="text" value="yo" name="prenom"/></div>

    <p class="age-info">Quel est votre âge ? *</p>
    <div class="input-border"><input class="input-adjust" placeholder="112" type="number" maxlength="3" value="10"/></div>

    <p class="email-info">Quel est votre adresse email ? *</p>
    <div class="input-border"><input class="input-adjust" type="email" placeholder="johndoe@spacex.com" value="popo@gmail.com"/></div>
    <div class="input-ok_green-container">
      <div class="input-certification"><img class="ok_green none" src="img/ok_green.svg" /></div>
      <p class="certification-text">Je certifie avoir lu et approuvé les <span class="conditions-span">conditions générales</span> d'utilisation. *</p>
    </div>
    <p class="conditions">* Les champs sont à remplir.</p>
    <div class="modal">
      <div class="modal-content">
        <span class="close-modal"><img class="close-img" src="img/exit.svg" /></span>
        <h2 class="modal-title">Conditions générales</h2>
        <div class="modal-text-content">
          <p class="modal-text-conditions">Space X s’engage à ne pas divulger vos informations personnelles.</p>
          <p class="modal-text-conditions">Ce questionnaire est ouvert à toute personne physique majeure résidant sur la planète Terre.</p>
          <p class="modal-text-conditions">Ce questionnaire ne vous force en aucun cas à participer.</p>
        </div>
      </div>
    </div>

    <input class="validation" type="submit" value="VALIDER" />
  </form>
</section>
</div>
<script src="appInfo.js"></script>


<?php
include "includes/footer.php";
?>
