<?php

// - Je créer une fonction pour récupérer dans un tableau associatif un jeu de résultat concernat la colonne pseudo, email,
//   passHash, de l'enregistrement concerné par l'email saisie dans le formulaire de connexion de l'utilisateur.
function getDatasToformConnex($connectBdd, $mail){

  // - dans ma requête je dis que pour l'email passsé en paramètre de la fonction je sélectionne les valeurs de la colonne
  //   pseudo, email, passHash.
  $getDatasToConnex = "SELECT pseudo, email, passHash FROM users_registred WHERE email='$mail'";

  // - j'applique sur mon objet PDO (la connexion) la méthode query() et passe en paramètre ma requête.
  // - PDO::query, Exécute une instruction SQL, renvoyant un jeu de résultats en tant qu'objet PDOStatement.
  // https://www.php.net/manual/en/pdo.query.php
  $pdoStmt = $connectBdd->query($getDatasToConnex);  

  // - sur mon objet PDOStatement obtenu j'aplique la méthode fetch() et passe en paramètre PDO::FETCH_ASOOC
  // - PDOStatement::fetch, récupère la ligne suivante d'un jeu de résultats.
  // - PDO::FETCH_ASSOC, retourne un tableau indexé par nom de colonne tel que retourné dans votre jeu de résultats.
  return $pdoStmt->fetch(PDO::FETCH_ASSOC);

}
