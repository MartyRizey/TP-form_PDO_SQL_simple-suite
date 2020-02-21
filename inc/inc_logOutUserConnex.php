<?php

// - fonction -> on détruit les variables de notre session : session_unset();
//            -> on détruit notre session : session_destroy();

  function logOutUser($pseudo, $password, $email){

    // https://www.php.net/manual/en/function.session-unset.php
    // Il ne faut pas oublier de détruire les varaibles de Session concernées avant de détruire la session en elle même.
    unset($pseudo);
    unset($password);
    unset($email);

    // https://www.php.net/manual/en/function.session-destroy.php
    // session_destroy() détruit toutes les données associées à la session en cours. Il ne supprime aucune des variables
    // globales associées à la session, ni ne désactive le cookie de session.
    session_destroy();
  }
