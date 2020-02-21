<?php

// je requiers la connexion à ma Bdd qui est dans le fichier connex_bdd.php, ici.
require_once '../inc/inc_connexBdd.php';
// je requiers la requête de selection qui est dans le fichier sqlSelectDatasReg.php
// , ici.
require_once '../modeles/mod_sqlSelectDatasReg.php';
// je requiers la requête d'insertion des données en Bdd qui est dans le fichier
// sqlInsertDatasReg.php, ici.
require_once '../modeles/mod_sqlInsertDatasReg.php';

// Je récupére les données du formulaire d'inscription pour les traiter et les
// stocks dans des variables => $birthday = htmlspecialchars(trim($_POST['birthday']));
// trim() permet de nettoyer la saisie utilisateur en supprimant les espaces ou
// d'autres caractères en début et fin de chaîne.
// OU
// https://www.php.net/manual/fr/function.filter-input.php -
// https://www.php.net/manual/en/filter.constants.php -
// https://www.php.net/manual/fr/filter.filters.php
$pseudo   = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$birthday = trim(filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email    = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

// j'appel ma fonction selectPseudo() en lui passant 2 arguments. La connexion à
// la Bdd ($connectBdd) car je l'ai requis ici, et le speudo à rechercher ($pseudo).
// Je stocke le résultat de la requête dans $selectPseudoInBdd qui est un objet.
// Cela me permet de récupérer ou pas le pseudo saisie dans le formulaire, de la Bdd.
// j'ai accès à ma fonction car j'ai requis le fichier ligne 6 dans ce fichier ci.
$selectPseudoInBdd = selectPseudo($connectBdd, $pseudo);

if(isset($pseudo) && !empty($pseudo)){

  // Je vérifie que la la propriété 'pseudo' de mon objet $selectPseudoInBdd
  // n'est pas vide et la compare au peudo saisi par l'utilisateur.
  // pour accèder à la propriété de mon objet j'utilise la '->'. ex: objet->propriété
  // permet d'accèder à la valeur contenue dans la propriété.
  // Si le speudo récupéré de la Bdd est strictement égale au pseudo saisi, donc
  // qu'il existe.
  if(!empty($selectPseudoInBdd->pseudo) === $pseudo){

    // Je redirige vers la page index.php.
    header('Location: ../index.php');

    // Sinon j'exécute le code ci-dessous.
  } else {

    // Je vérifie que $email existe et qu'il n'est pas vide et qu'il contient
    // bien arobase '@'.
    if(isset($email) && !empty($email) && substr(strstr($email, '@'),0,1)) {

      // je vérifie que $password existe et qu'il n'est pas vide, qu'il ne fait
      // pas plusde 12 caractères et que le premier caractère n'est pas '<'.
      if(isset($password) && !empty($password) && strlen($password < 12) && substr($password,0,1) != '<'){

        // je hache le mot de passe saisi ($password) => https://www.php.net/manual/en/function.password-hash.php
        $pwdHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 14]);

        // j'appel une fonction d'insertion des données saisies en Bdd en passant
        // en paramètre la connexion à la Bdd ($connectBdd).
        // Et les valeurs saisies dans le formulaire, ainsi que le mot de passe
        // haché $pwdHash.
        // j'ai accès à ma fonction car j'ai requis le fichier ligne 8 dans ce
        // fichier ci.
        sqlInsertDatasReg($connectBdd, $pseudo, $birthday, $email, $pwdHash);

        // une fois ceci fait je redirige vers index.php
        header('Location: ../index.php');
        exit();

      } else {
        header('Location: ../views/vws_404error.php');
      }

    } else {
      header('Location: ../views/vws_404error.php');
    }

  }

} else {
  header('Location: ../views/vws_404error.php');
}
