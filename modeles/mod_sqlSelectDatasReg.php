<?php

  /*
    Je récupére dans les paramètres de ma fonction les valeurs passées dans l'appel de cette fonction dans le
    fichier Ctrl_InsertDatasReg.php.
    C'est à dire la connection à la Bdd ($connectBdd) et le pseudo ($pseudo)à rechercher.
  */
    function selectPseudo($connectBdd, $pseudo){
    /*
     Je fais une requête de SELECTION en Bdd.
     Je selectionne la colonne pseudo dans la table users_registred dont la valeur et égal à $pseudo
     (càd le pseudo saisi par l'utilisateur).
    */
    $getPseudoToBdd = "SELECT pseudo FROM users_registred WHERE pseudo='$pseudo'";

    // j'applique sur mon objet PDO (la connexion) la méthode query() et passe en paramètre ma requête.
    // PDO::query, Exécute une instruction SQL, renvoyant un jeu de résultats en tant qu'objet PDOStatement.
    // https://www.php.net/manual/en/pdo.query.php
    $pdoStmnt = $connectBdd->query($getPseudoToBdd);

    // sur mon objet PDOStatement obtenu j'aplique la méthode fetch() et passe en paramètre PDO::FETCH_OBJ
    // PDOStatement::fetch, récupère la ligne suivante d'un jeu de résultats.
    /*
       PDO::FETCH_OBJ, retourne un objet anonyme avec des noms de propriété qui correspondent aux noms de
       colonne retournés dans votre jeu de résultats.
     */
    return $pdoStmnt->fetch(PDO::FETCH_OBJ);

  }
