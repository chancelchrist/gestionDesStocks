<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="../../css/style.css" rel="stylesheet">


    <title>Odette-GDS</title>
  </head>

  <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="../mouvement_des_stocks.php">Home</a></li>
            <li role="presentation"><a href="../maj.php">Mise a jour</a></li>
            <li role="presentation"><a href="../cmd/sortie.php">Sortie</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Odette-GDS</h3>
      </div>
  

        
            <div class="jumbotron">
                <h1>Recherche</h1>
            <div>
        <div class="container  register-form">
            <form method="POST" action="traitement_facture.php">
                <div class="form" >
                    <div class="note">
                        <p> Entrer le numero de la facture donc vous voulez retrouvez </p>
                    </div>
                    <div class="form-content">
                        <div class="row align-items-start">
                                <div class="form-group">
                                    <label> Numero Facture </label> <input type="number" name="num" class="form-control">
                            </div>
                        </div>
                        <input class="btn btn-lg btn-primary "type="submit" value="Chercher &raquo;">
                    </div>
                </div>
            </form>
        </div>
        <footer class="footer">
            <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
        </footer>


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>


