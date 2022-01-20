<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">


    <title>Odette-GDS</title>
  </head>
  <?php
            try{
                // connexion a la bdd
                $connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
                $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch (PDOException $e) // on verifie s'il ya pas d'erreur
                                        {
                                         die('Erreur : ' . $e->getMessage());
                                         }

    ?>
   <body>
  <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">Odette-GSD</h3>
      </div>
       

      <div class="jumbotron">
        <h1>Identification</h1>
        <div class="container">

    <form class="form-signin" method="POST" action="pages/mouvement_des_stocks.php">
       <label for="inputName" class="sr-only">Nom d'utilisateur</label>
       <input type="name" id="inputName" class="form-control" placeholder="Nom utilisateur" required autofocus>
       <br>
       <label for="inputPassword" class="sr-only">Mot de passe</label>
       <input type="password" id="inputPassword" class="form-control" placeholder="Mot de pass" required>

       <button class="btn btn-lg btn-primary " type="submit">Connexion</button>
    </form>

</div>
        <p class="lead">Entrer vos identifiant personnel</p>
      </div>

      <footer class="footer">
        <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
      </footer>

    </div> <!-- /container -->



    <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>