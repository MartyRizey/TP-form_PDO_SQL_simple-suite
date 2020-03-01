# ```Back-End : PHP / PDO / SQL / Bdd```

## Transmission des données

### L'idée : _travailler dans un premier temps :_  

  > - [x] Un formulaire d'inscription.  
  > - [x] Un formulaire de connexion.

---

#### ```Fonctionnalitées à ajouter```

  > _**Session Utilisateur**_

   - [x] Faire en sorte de se souvenir de la personne connectée en utilisant les `sessions`.
   - [x] Créer un bouton de `logOut` dans la barre de navigation qui apparait quand un utilisateur est connecté.

  > _**Formulaire d'inscription.**_

   - [ ] Ajouter un message quand on est redirigé vers la page index :
   - [ ] lorsque l'insertion en Bdd c'est bien faite.
   - [ ] ou lorsqu'il y a eu problème.  

  > _**Ajouter une page admin.**_

  - [ ] En ce connectant via un email et un password admin specifique.

  - [ ] Sur la page afficher la liste des comptes en Bdd.
  - [ ] Créer un bouton :
      - [ ] _Supp_
      - [ ] _Modif_.
  - [ ] Faire en sort de pouvoir trier la liste par :
      - [ ] _ordre alphabètique_.
      - [ ] _par email_.
      - [ ] _par date_.

#### ```Faire du CSS correct```

  >_**Appliquer du style et de la mise en forme.**_

  - [x] HTML sur les fichiers concernés
  - [x] CSS sur les fichiers concernés également.

  ---

- Branche **master**

    └> Arborescence de fichiers et dossiers simple.
    └> Arborescence des dossiers type MVC.  

        <> index.php                                       <-| views/home.php
            |
            |                                                | views/tpl_doctype.php                                                                        <-| assets/css/style.css
            views/home.php                                 <-| views/tpl_header.php                                                                         <-| views/tpl_navbar.php
            |                                                | views/tpl_footer.php                                                                                 
            |                                                
            |                                                | views/vws_formConnexModal.php        >> Controllers/Ctrl_insertDatasRegistration.php         <-| /../inc/path_directory.php                
        => views/tpl_navbar.php                            <-| views/vws_formRegistrationModal.php  >> Controllers/Ctrl_insertDatasRegistration.php
            |                                                | /../inc/inc_logOutUserConnex.php
            |                                                | /../inc/path_directory.php
            |
            |
        ======================
        | Bouton Inscription |
        ======================               
            |
            => views/vws_formRegistrationModal.php
            |                                                 | inc/inc_connexBdd.php                                                                       <-| inc/inc_configBdd.php
            └> Controllers/Ctrl_insertDatasRegistration.php <-| modeles/mod_sqlSelectDatasReg.php                                 
                            |                                 | modeles/mod_sqlInsertDatasReg.php
                            |
                            └> ../index.php
                                ../views/vws_404error.php


                                -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


            |                                                | views/vws_formConnexModal.php        >> Controllers/Ctrl_insertDatasRegistration.php         <-| /../inc/path_directory.php                
        => views/tpl_navbar.php                            <-| views/vws_formRegistrationModal.php  >> Controllers/Ctrl_insertDatasRegistration.php
            |                                                | /../inc/inc_logOutUserConnex.php
            |                                                | /../inc/path_directory.php
            |
            |
        ====================              
        | Bouton Connexion |
        ====================
            |
        => views/vws_formConnexionModal.php                  | /../inc/path_directory.php
            |                                                
            └> Controllers/Ctrl_selectDatasForConnex.php   <-| inc/inc_connexBdd.php                                                                        <-| inc/inc_configBdd.php
                            |                                | modeles/mod_sqlSelectDatasForConnex.php   
                            |                                | /../inc/path_directory.php                                                         
                            |
                            └> ../views/vws_404error.php
                               ../index.php

## Ressources

> **Erreurs :**
```
    Warning: Cannot modify header information - headers already sent by (output started at  
    D:\Logiciels\laragon\www\tutoriels\Formulaires\#3-PDO_acces_bdd\TP_CRUD_SQL-simple_suite\views\vws_formRegistrationModal.php:1) in
    D:\Logiciels\laragon\www\tutoriels\Formulaires\#3-PDO_acces_bdd\TP_CRUD_SQL-simple_suite\Controllers\Ctrl_selectDatasForConnex.php on line 61
```

- https://www.grafikart.fr/tutoriels/headers-already-sent-871  

- https://stackoverflow.com/questions/8028957/how-to-fix-headers-already-sent-error-in-php  

```
    Corrigée dans le fichier -> \views\home.php :
    - L'erreur : require __DIR__ . '/../Controllers/Ctrl_selectDatasForConnex.php';
```
> **GIT**

- **Git stash**

```
    https://git-scm.com/docs/git-stash
    - Permet de revenir à un repos propre avant un 'git add .' et un 'git commit' et d'avoir pusher son code.
```

- **.gitignore**

```
    permet de lister des fichiers qui doivent être ignorés lors du 'git add'. C'est à dire que le fichier ne sera pas commité lors du 'git commit'.
```

- **Git rm --cached <file(s)>** 

```
    supprimer des fichiers suivis du repo qui auraient été ajoutés par erreur OU ajoutés dans le .gitignore par la suite (ne supprime pas le fichier lui-même en local, bien entendu, uniquement dans le dépôt).
```
