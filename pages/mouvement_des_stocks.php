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
  </div>
    
  <div class="jumbotron">
                <h2>Selectionner une action</h2>
            <div>
        <div class="container  register-form">
            
                <div class="form" >
                    <div class="note">
                    <p class> ici il s'agit de cliquer juste sur l'operation que  vous souhaiter traiter</p>
                    </div>
                    <div class="form-content">
                        <div class="row align-items-start">
                          <div class="col-md-4">
                            <div class="form-content">
                              <h3 class="text-center text-primary">Mise a jour</h3>
                              <p class="text-center"> Cette option vous permet d'ajouter une categorie, inserer de nouveau produit et plein d'autre tache de maintenance </p>
                              <p class="text-center"><a class="btn btn-primary" href="maj.php" role="button">Valider &raquo;</a></p>
                            </div>
                            <div class="form-content">
                              <h2 class="text-center text-primary" >Inventaires</h2>
                              <p>Cette option vous permet de voir la liste des produits en stock avec leurs quantites disponible</p>
                              <p><a class="btn btn-primary" href="inventaire.php" role="button">Valider &raquo;</a></p>
                              </div>
                          </div>
                            <div class="col-md-4">
                              <div class="form-content">
                              <h2 class="text-center text-primary">Stockages</h2>
                                <p><br>Cette option vous permet d'enregistrer les nouvelles marchandises receptionner </p>
                                <br><p class="text-center"><a class="btn btn-primary" href="entrer/entrer.php" role="button">Valider &raquo;</a></p>
                              </div>
                              <div class="form-content">
                              <h2 class="text-center text-primary">Autres Operations</h2>
                                <p><br>Cette option vous permet de verifiers les differents operations Journaliere </p>
                                <p class="text-center"><a class="btn btn-primary" href="recherche/operation.php" role="button">Valider &raquo;</a></p>
                              </div>
                              
                            </div>   
                            <div class="col-md-4">
                            <div class="form-content">
                                <h2 class="text-center text-primary">Destockage</h2>
                                <p><br>Cette option vous permet de faire des marchandises qui on ete deja vendue</p>
                                <br><p><a class="btn btn-primary" href="cmd/sortie.php" role="button">Valider &raquo;</a></p>
                              </div>
                              <div class="form-content">
                                <h2 class="text-center text-primary">Rechercher une facture</h2>
                                <p>Cette option vous permet d'afficher les donnees relative a une facture. </p>
                                <p><a class="btn btn-primary" href="Recherche/facture.php" role="button">Valider &raquo;</a></p>
                              </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    
                
              </div>
              
            </div>
          </div>  
        </div>
      </div>
      <div class="container">
      <footer class="footer">
            <p>&copy; 2021 wenkam 21U2522, Tous droit reserve.</p>
        </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
