<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="none"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- pour assurer un bon rendu sur ordi avec bootstrap -->

  <title>CayoCoco - index</title>
  <meta name="description" content="Inscription au serveur de NSI">
  <meta name="author" content="Norman ALIE">

  <link rel="stylesheet" href="css.css">

</head>

<body>
  <div class="jumbotron text-center">
    <h1>Inscription au serveur de NSI</h1>
  </div>

<div class="row">
  <div class="col-sm-4">
  </div>

  <div class="col-sm-4">

      <form 
        name="sign-up" 
        onsubmit="return validateFormSignUp('sign-up', 'name', 'surname', 'pseudo', 'pwd', 'pwd-conf')" 
        action="" 
        method="post"
      >
        <div class="form-group">
          <label for="name">NOM:</label>
          <input type="text" class="form-control" placeholder="Votre nom" id="name" size="65" autofocus required>
        </div>
        <div class="form-group">
          <label for="surname">Prénom:</label>
          <input type="text" class="form-control" placeholder="Votre prénom" id="surname" size="65" required>
        </div>
        <div class="form-group">
          <label for="pseudo">Identifiant:</label>
          <input type="text" class="form-control" placeholder="Votre indentifiant pour vous connecter" id="pseudo" size="25" required>
        </div>
        <div class="form-group">
          <label for="pwd">Mot de passe:</label>
          <input type="password" class="form-control" placeholder="Choisissez un mot de passe" id="pwd" min="65" required>
        <div class="form-group">
          <label for="pwd-conf">Confirmez votre mot de passe:</label>
          <input type="password" class="form-control" placeholder="Confirmez votre mot de passe" id="pwd-conf" min="65" required>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>

  </div>

  <div class="col-sm-4">
  </div>
</div>

  <script src="js.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Pour le dev, utiliser uniquement les elements necessaires en prod en les ajoutants à la fuille de style -->
  <!-- JS optionnel pour boostrap -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>