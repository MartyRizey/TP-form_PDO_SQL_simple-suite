<?php
  
  session_start();  
  require __DIR__ . '/tpl_doctype.php';
  require __DIR__ . '/tpl_header.php';
  require __DIR__ . '/../Controllers/Ctrl_selectDatasForConnex.php';

 ?>

<section id="home_page">

   <p class="home_page-date"><?= date('l d F Y'); ?></p>

   <h1 id="home_page-title">Page HOME</h1>
   
   <p class="home_page-resume">Si la page vous parez fade ... ne cherchez pas à savoir si je suis un artiste raté. Ici l'objectif n'est pas de faire du Web Design ni de jolies pages, mais essentiellement du Back-end. De comprendre est d'appliquer la transmission de données à travers un <em>formulaire de connexion</em>, un <em>formulaire d'inscription</em> et aussi utiliser une <em>base de données</em> pour stocker et gérer les données.</p>

   <!-- -->
   <?php 

      // Condition ternaire => https://www.php.net/manual/fr/language.operators.comparison.php
      echo $message = (!isset($_SESSION['pseudo']) )? '<h3 class="home_page-message">Pensez à vous inscrire si vous êtes un nouvel utilisateur.</h3>' : 'Session de :' . $_SESSION['pseudo'] ; 
      
   ?>
   
   
      

</section>

 <?php require __DIR__ . '/tpl_footer.php'; ?>
