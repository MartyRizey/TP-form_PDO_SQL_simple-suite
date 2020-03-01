# DOC D'INSTALLATION

 ---

> **Installation d'une solution pour développer en PHP**

- Installer en premier lieu une plate-forme de développement Web type WAMPSERVER, LAMPP, XAMP, LARAGON. Choisissez en une adaptée à votre système d'exploitation.
De manière générale celle-ci vous fournira un serveur Apache2, le language PHP, une base de données MySQL et une SGBDD comme phpMyAdmin. 
- Sinon vous pouvez aussi installer tout à la main 😬.

> **Tranférer le dépôt de GitHub en local**

Cloner le dépôt dans le répertoire accessible par le serveur Apache ou votre `localhost`, en général c'est le dossier `www` qui se trouve dans le dossier correspondant à l'install d'une des solutions sitées plus haut.

---

> 1.Créer un base de données avec les champs suivants :

   |   NOM    |   TYPE       |   INTERCLASSEMENT    |                 DESCRIPTION             |
   | -------- | ------------ | -------------------- | --------------------------------------- |
   |    id    |   int(11)    |                      | PRIMARY_KEY **&** non NULL **&** AUTO_INCREMENT |
   |  pseudo  | varchar(30)  |  utf8mb4_general_ci  | non NULL                                |
   | passHash | varchar(254) |  utf8mb4_general_ci  | non NULL                                |
   |  email   | varchar(100) |  utf8mb4_general_ci  | non NULL  **&** UNIQUE                      |
   |  pseudo  |    date      |                      | non NULL                                |
~ 

> 2.Créer une fichier pour la config de la Bdd :

- nom du fichier => `inc_configBdd.php`, le créer dans le dossier **inc**.
- Vous pouvez créer votre propre fichier mais dans ce cas il faudra changer les chemin des `require` dans les différents fichiers.
- En plus de votre `$dsn` qui contient le driver, l'endroit ou se trouve votre server, le nom de la Bdd et l'encodage,
     du `$user` qui contient l'utilisateur, et du `$password` qui contient le mot de passe de la Bdd,
     dans la config de connexion j'ai aussi ajouté => `$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];`