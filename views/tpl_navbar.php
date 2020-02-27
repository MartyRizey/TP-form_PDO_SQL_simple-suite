<?php
  require_once __DIR__ . '\vws_formConnexModal.php';
  require_once __DIR__ . '\vws_formRegistrationModal.php';
  require_once __DIR__ . '\..\inc\path_directory.php';   
?>

<nav id="navBar">

  <div id="navBar_links">
    <ul>
      <li><a href=<?= ROOTPATH . 'index.php'; ?>>Home</a></li>
      <li><a href="#">Link_2</a></li>
    </ul>
  </div>

  <div id="navBar_login">
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

          <button type="button" class="btn btn-danger"><span>LogOut</span></button>

        <?php endif; ?>   
             
      </li>

    </ul>
  </div>

</nav>
