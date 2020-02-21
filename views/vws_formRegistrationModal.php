<!--
  Après avoir cliqué sur le bouton 'Inscription' dans la NavBar j'arrive ici
  Créer une table 'Inscription' en Bdd.
  -->

<!-- The Modal -->
<div class="modal" id="modalInscription">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-title-inscript">M'inscrire</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <!-- Je transmet les données saisies dans le fichier Ctrl_insertDatasRegistration.php -->
        <form action="Controllers/Ctrl_insertDatasRegistration.php" method="POST">

          <div class="input_form input_form-reg_bkgd">

            <!--
              [x] : Pensez à faire un test pour savoir SI le speudo existe dèjà en Bdd, SINON faire une requête d'insertion en
                    Bdd .
              [x] : Créer une table 'inscription' en Bdd.
            -->
            <label class="label_items_inscript" for="pseudo">Votre speudo : </label>
              <input type="text" name="pseudo" id="pseudo" placeholder="votre speudo"
                     title="Vous pouvez utilisez les majuscules, mais le pseudo entier ne doit pas l'être" required />

            <label class="label_items_inscript" for="birthday">Date anniversaire : </label>
              <input type="date" name="birthday" id="birthday" />

            <label class="label_items_inscript" for="mail">Votre email : </label>
              <input type="email" name="email" id="mail" placeholder="johnDoe@mail.fr" required />
            <!--
              [x] : Hacher le mot de passe avec password_hash(), le stocker en Bdd.Vérifier à la connexion que le password saisie
                    dans le formulaire de conexion corresponde avec le mot de passe hacher en Bdd avec password_verify().
            -->
            <label class="label_items_inscript" for="pass">Votre mot de passe : <em>12 caractères maximum.</em></label>
              <input type="password" name="password" id="pass" placeholder="mot de passe" title="Le mot de passe ne doit pas dépasser 12 caractères" required />

          </div>
          <br>

          <!-- Modal footer -->
          <div class="modal-footer">
            <!--
              Ici je soumet mon formulaire, les données sont transmisent au fichier qui est en valeur de l'attribut 'action' dans
              la balise <form>et elles seront transmisent en POST comme indiqué par la valeur de l'attribut 'method'
            -->
            <button type="submit" class="btn btn-info">S'inscrire</button>
            <!-- <input type="submit" class="btn btn-primary" value="Login"/> -->
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
