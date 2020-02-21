<!-- Après avoir cliqué sur le bouton 'Connexion' dans la NavBar j'arrive ici -->

<!-- The Modal -->
<div class="modal" id="modalConnexion">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title modal-title-connex">Me connecter</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <!-- Je transmet les données saisies dans le fichier Ctrl_selectDatasForConnex.php -->
        <form action="Controllers/Ctrl_selectDatasForConnex.php" method="POST">

          <!-- <input type="hidden" name="userId" value="" /> -->

          <div class="input_form input_form-connex_bkgd">

            <label class="label_items_connex" for="mail">Votre email : </label>
              <input type="email" name="email" id="mail" placeholder="johnDoe@mail.fr" required />

            <label class="label_items_connex" for="pass">Votre mot de passe : <em>12 caractères maximum.</em></label>
              <input type="password" name="password" id="pass" placeholder="mot de passe" title="Le mot de passe ne doit pas dépasser 12 caractères" required />

          </div>
          <br>

          <!-- Modal footer -->
          <div class="modal-footer">
            <!--
              Ici je soumet mon formulaire, les données sont transmisent au fichier qui est en valeur de l'attribut 'action' dans
              la balise <form> et elles seront transmisent en POST comme indiqué par la valeur de l'attribut 'method'
            -->
            <button type="submit" class="btn btn-primary">Login</button>
            <!-- <input type="submit" class="btn btn-primary" value="Login"/> -->
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
