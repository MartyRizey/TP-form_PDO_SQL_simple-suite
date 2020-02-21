<?php

  session_start();
  // Je requieres le fichier contenant ma fonction pour me déconnecter de mon compte.
  require_once '../inc/inc_logOutUserConnex.php';
  require_once __DIR__ . '/tpl_doctype.php';
  require_once __DIR__ . '/tpl_header.php';

  /*
   je vérifie que mon password et mon email en SESSION existent ...
   - SI oui (valeur après le ?) alors je stocke les valeurs saisies dans des variables.
   - SINON (valeur après les :) alors je stocke une chaîne de caractères vide.
  */
  $pwd = (isset($_SESSION['password'])) ? $_SESSION['password'] : '' ;
  $mail = (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ;
  
  // Si pseudo en Session existe et qu'il n'est pas vide, je rentre dans la condition.
  if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])): ?>

  <section id="user_page">

    <h2 class="user_page-title">Vous êtes connecté à votre compte <em><?= $_SESSION['pseudo']; ?></em>.</h2>

    <form action="" method="post">
      <!--
        En cliquant sur le bouton j'active la fonction logOutUser() qui permet de me déconnecter de 
        mon compte.
      -->
      <button type="submit"
              class="user_page-btnDeconnexion"
              name="button"              
              value="<?php logOutUser($_SESSION['pseudo'], $pwd, $mail); ?>"
              >Déconnection
      </button>
    </form>

  <?php else: //header('Location: ../index.php'); ?>

    <!-- Attention ce bouton ne me déconnecte pas de ma session personnelle -->
    <div class="return_cta"><a href="../index.php"> Retour</a></div>

  <?php endif; ?>    

  </section>

  <?php require_once __DIR__ . '/tpl_footer.php'; ?>
