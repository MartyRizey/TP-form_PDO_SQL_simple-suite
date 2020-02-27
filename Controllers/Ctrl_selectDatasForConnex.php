<?php  

  require_once __DIR__ . '/../inc/inc_connexBdd.php';
  // J'ai besoin de ma requête ici, je requiers le fichier qui la contient ici.
  require_once __DIR__ . '/../modeles/mod_sqlSelectDatasForConnex.php';
  require_once __DIR__ . '/../inc/path_directory.php';

  // je récupére les données de mon formulaire de connexion du fichier vws_formConnexModal.php
  $email    = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
  $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

  /*
  - Pour pouvoir me connecté à mon compte, j'ai besoin de comparer les données saisies avec celle enregistrées 
    en Bdd lors de mon inscription.
  - Je vais donc créer une fonction dans laquelle j'aurais une requête de sélection des données dont j'aurais 
    besoin, dans le fichier mod_sqlSelectDatasForConnex.php
  - Ici je récupérerais les données de l'appel de ma fonction que je stockerais dans la variable $userConnex.
  - Je passe en argument de l'appel à la fonction la connexion à la Bdd et ma variable $email, qui me permettra 
    de récupérer l'email concerné par la connexion.
  */
  $userConnex = getDatasToformConnex($connectBdd, $email);

  /*
    Ici je teste si le tableau est différent de vide. c'est à dire si il y a quelque chose dedans. C'est à dire si
    l'email et le password saisie dans le formulaire de connexion sont dedans.
  */
  if($userConnex != FALSE){

    /*
      Je vérifie que $email existe ou qu'il n'est pas vide et que $email est strictement égal à l'email stocké en 
      Bdd que je récupére et qui est stocké dans ma variable qui est un tableau associatif.
    */
    if(isset($email) || !empty($email) && $email == $userConnex['email']){

      /*
        https://www.php.net/manual/fr/function.password-verify.php
        Je vérifie que le password saisie correspond au password haché lors de l'inscription, stocké en bdd, et 
        qui stocke le résultat qui renverra soit 1 soit 0.
      */
      $pwdVerify = password_verify($password, $userConnex['passHash']);

      // Si le champ passeword du formulaire n'est pas vide et que $pwdVerif retourne 1.je rentre dans la condition.
      if(!empty($password) && strlen($password) < 12 && $pwdVerify) {

        /*
          j'active la session, Je stock en session le pseudo que je récupére de la Bdd. et je me relocalise sur la 
          page d'un utilisateur.
        */
        session_start();
        $_SESSION['pseudo'] = $userConnex['pseudo'];
        header('Location: ../index.php');
        exit;

      } else {
        header('Location: ../views/vws_404error.php');
        exit;
      }

    } else {
      header('Location: ../index.php');      
    }

  } else {    
    header('Location: ../index.php');         
  }
