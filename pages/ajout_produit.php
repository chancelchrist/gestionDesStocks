<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">


    <title>Odette-GDS</title>
  </head>

  <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="mouvement_des_stocks.php">Home</a></li>
            <li role="presentation"><a href="entrer/entrer.php">Entrer</a></li>
            <li role="presentation"><a href="cmd/sortie.php">Sortie</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Odette-GDS</h3>
      </div>
    



<div class="container">
    <div class="jumbotron">
        <h1>Ajout d'un nouveau Produit</h1>
    <div>
    </div>
    <div class="container">
    <?php
        try{
            // connexion a la bdd
            $connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
            $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) // on verifie s'il ya pas d'erreur
                                    {
                                     die('Erreur : ' . $e->getMessage());
                                     }

                                     $reponse = $connexion->query('SELECT *
                                     FROM categorie');

    ?>
      
    <form method="POST" action="traitement_ajout.php">
        <div class="form-group"> 
            <label for="categorie">Categorie du produit</label>
            <select name="categorie" id="selection1" class="form-control">
        <?php while ($donnees = $reponse->fetch()){ ?>
           <option value="<?php echo $donnees['id_categorie']; ?>"> <?php echo $donnees['nom_categorie']; ?></option>
        <?php } ?>
           </select><br>
        </div>

        <div class="form-group"> 
            <label> Nom du produit </label> <input class="form-control" type="text" name="nom"><br>
        </div>

        <div class="form-group"> 
            <input class="btn btn-lg btn-primary "type="submit" value="Sauvegarder">
        </div>
    </form>



    


    <footer class="footer">
        <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
      </footer>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


