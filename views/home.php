<?php
  
  require __DIR__ . '/tpl_doctype.php';
  require __DIR__ . '/tpl_header.php';  
  /*
   Warning: Cannot modify header information - headers already sent by (output started at D:\Logiciels\laragon\www\tutoriels\Formulaires\#3-PDO_acces_bdd\TP_CRUD_SQL-simple_suite\views\vws_formRegistrationModal.php:1) in D:\Logiciels\laragon\www\tutoriels\Formulaires\#3-PDO_acces_bdd\TP_CRUD_SQL-simple_suite\Controllers\Ctrl_selectDatasForConnex.php on line 61
  */
  /*
   Le problème a priori était du au fait que je rappelais le fichier ci-dessous une 2ième fois, donc une en-tête HTTP était déjà faites avant les commentaires ligne 1, du fichier vws_formRegistrationModal.php
  */
  // require __DIR__ . '/../Controllers/Ctrl_selectDatasForConnex.php';  
  
 ?>

<section id="home_page">

   <p class="home_page-date"><?= date('l d F Y'); ?></p>

   <?php
      if(isset($_SESSION)){

         // Condition ternaire => https://www.php.net/manual/fr/language.operators.comparison.php
         // Verifie si une clé existe dans le tableau => https://www.php.net/manual/fr/function.array-key-exists.php
         echo $message = (!array_key_exists('pseudo', $_SESSION)) 

            // en fonction de si une personne est connéctée on affichera un des 2 messages qui sera stocké dans $message.
            ? '<h3 class="home_page-message">Pensez à vous inscrire si vous êtes un nouvel utilisateur.</h3>' 
            : 'Bienvenu(e) dans votre session : ' . $_SESSION['pseudo'];
      }      
   ?>   

   <h1 id="home_page-title">Page HOME</h1>
   
   <p class="home_page-resume">Si la page vous parez fade ... ne cherchez pas à savoir si je suis un artiste raté. Ici l'objectif n'est pas de faire du Web Design ni de jolies pages, mais essentiellement du Back-end. De comprendre est d'appliquer la transmission de données à travers un <em>formulaire de connexion</em>, un <em>formulaire d'inscription</em> et aussi utiliser une <em>base de données</em> pour stocker et gérer les données.</p>

        

</section>

 <?php require __DIR__ . '/tpl_footer.php'; ?>
