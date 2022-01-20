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
  </div class="container">
                    <?php
            try{
                // connexion a la bdd
                $connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
                $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){ // on verifie s'il ya pas d'erreur
                die('Erreur : ' . $e->getMessage());}

            $reponse = $connexion->query('SELECT *
                                        FROM client
                                        ORDER BY nom_client ASC');

            $reponsef = $connexion->query('SELECT *
                                                FROM fournisseur
                                                ORDER BY nom_fournisseur ASC');
            
        ?>
        
            <div class="jumbotron">
                <h1>Stockages</h1>
            <div>
        <div class="container  register-form">
            <form method="POST" action="traitement_entrer.php">
                <div class="form" >
                    <div class="note">
                        <p> Entrer les informations qui sont ecrit sur le bordero de livraison</p>
                    </div>
                    <div class="form-content">
                        <div class="row align-items-start">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label></label><input type="text" name="quantite1"  hidden value="">
                                </div>
                                <div class="form-group">
                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <br><br><label for="categorie">Categorie du produit 1</label>
                                    <select name="categorie1" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 2</label>
                                    <select name="categorie2" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 3</label>
                                    <select name="categorie3" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                                
                                
                            </div>
                            <div class="col-md-4">
                                <div class=" form-group">
                                <label for="fournisseur">Nom du fournisseur</label>
                                    <select name="fournisseur" id="selection1" class="form-control">
                                    <option value="none" selected>----------</option>
                                        <?php while ($donnees1 = $reponsef->fetch()){ ?>
                                        <option value="<?php echo $donnees1['id']; ?>"> <?php echo $donnees1['nom_fournisseur']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br>
                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 1</label>
                                    <select name="produit1" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 2</label>
                                    <select name="produit2" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 3</label>
                                    <select name="produit3" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>


                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                
                                <label></label><input type="text" name="quantite1"  hidden value="">
                                        </div>
                                       <br><br> <div class="form-group">
                                    <label> Quantite 1 </label> <input type="number" name="quantite1" class="form-control">
                                    <label> Quantite 2 </label> <input type="number" name="quantite2" class="form-control">
                                    <label> Quantite 3</label> <input type="number" name="quantite3" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-lg btn-primary "type="submit" value="Terminer &raquo;" onclick =  "alert('Stock enregistre avec succes!')">
                    </div>
                </div>
            </form>
        </div>
        <footer class="footer">
            <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
        </footer>


        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>


