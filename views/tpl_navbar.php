<?php
  require_once __DIR__ . '/vws_formConnexModal.php';
  require_once __DIR__ . '/vws_formRegistrationModal.php';
  require_once __DIR__ . '/../inc/inc_logOutUserConnex.php'; 
  require_once __DIR__ . '/../inc/path_directory.php';   
?>

<nav id="navBar">

  <div class="navBar_links">
    <ul>
      <li><a href=<?= ROOTPATH . 'index.php'; ?>>Home</a></li>
      <li><a href="#">Link_2</a></li>
    </ul>
  </div>

  <div class="navBar_login">
    <ul>
      <li>
        <!--
          Button to Open the Modal.
          L'attribut data-target="#myModal" ici fonction comme une ancre et appel
          l'attribut avec l'id="myModal" dans le fichier requis ligne 2.
          -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConnexion" title="Pour vous connectez, vous devez être inscrit.">Connexion</button>
      </li>
      <li>
        <!--
          Pour utiliser un second modal voilà la structure que j'ai trouvé...
          Ajouter une balise avec l'attribut 'data-toggle' dans la balise <button>
          -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalInscription" title="">
          <a data-toggle="modal">Inscription</a>
        </button>
      </li>

      <li>

        <!-- 
          https://www.php.net/manual/fr/control-structures.alternative-syntax.php 
          Ici si dans le tableau $_SESSION la clé 'pseudo' existe et si elle n'est pas vide alors j'affiche le bouton 'logOut'.
          -->
        <?php if(isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])): ?>
          <!-- 
            A la soumission du formulaire j'appel ma fonction 'logOutUser()' qui est dans le fichier inc_logOutUserConnex.php .
            Je lui passe en paramètre le pseudo stocké dans ma $_SESSION. Cela permettra de déconnecter la personne de sa Session en cours.            
            -->
          <form action="" method="POST">
            <button type="submit" class="btn btn-danger" name="logoutBtn" value="<?php logOutUser($_SESSION['pseudo']); ?>"><span>LogOut</span></button>          
          </form>

        <?php endif; ?>   

      </li>

    </ul>
  </div>

</nav>
