<?php

  // $dsn, $user, $password, $options(option)
  // Cela est la config pour me connecter à la Bdd via l'objet PDO => https://www.php.net/manual/fr/book.pdo.php

  $dsn = 'mysql:host=localhost; dbname=php_form_login; charset=utf8';
  $user = 'root';
  $password = 'root';

  // https://www.php.net/manual/en/pdo.setattribute.php
  $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
