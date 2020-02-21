<?php

  require_once __DIR__ . '\inc_configBdd.php';

  // Connexion => https://www.php.net/manual/fr/pdo.construct.php
  // PDO::__construct — Crée une instance PDO qui représente une connexion à la base

  try {

    $connectBdd = new PDO($dsn, $user, $password, $options);

  } catch (PDOException $e) {

    // https://www.php.net/manual/fr/class.pdoexception.php
    echo '<h1 style="color:red; font-weight:bold; text-shadow:1px 1px 2px black; text-align:center; font-family:sans-serif">Connexion échouée</h1>' . $e->getMessage();
    exit();

  }
