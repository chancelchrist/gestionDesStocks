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
	<body>
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
  		<?php

			try{
    			// connexion a la bdd
     			$connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
    			$connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOException $e) /* on verifie s'il ya pas d'erreur */{
    			die('Erreur : ' . $e->getMessage());}
  

		?>
  		<div class="jumbotron">
            <h2>Inventaires!</h2>
        <div>
        <div class="container  register-form">
            <div class="form" >
                <div class="note">
                    <p class> Liste des produits en stocks</p>
                </div>
                <div class="form-content">
                    <div class="row align-items-start">
                        <div class="col-md-4">
                            <table class="table table-bordered table-hover " >
								<label> <h3>Listing Des Farines</h3> </label>
            					<thead class="thead-dark">
                					<tr>
                    					<th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                					</tr>
            					</thead>
        						<?php
        							$requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        								FROM produits
        								LEFT JOIN categorie 
        								ON categorie.id_categorie = produits.id_categorie 
        								WHERE categorie.nom_categorie = "FARINES"
        								ORDER BY produits.Quantite ASC');

         							while ($donnees = $requete->fetch()) { ?>
                        				<tr>
                            				<td><?php echo $donnees['nom_categorie']; ?></td>  
                            				<td><?php echo $donnees['nom_produit']; ?></td> 
                            				<td> <?php echo $donnees['Quantite']; ?></td>
                        				</tr> 
            						<?php }?>

							</table>
							<table class="table table-bordered table-hover">
								<label> <h3>Listing D'Huiles</h3> </label>
            					<thead class="thead-dark">
                					<tr>
                    					<th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                					</tr>
            					</thead>
        						<?php
        							$requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        								FROM produits
        								LEFT JOIN categorie 
        								ON categorie.id_categorie = produits.id_categorie 
        								WHERE categorie.nom_categorie = "HUILES"
        								ORDER BY produits.Quantite ASC
									');
        
         							while ($donnees = $requete->fetch()) { ?>
                        				<tr>
                            				<td><?php echo $donnees['nom_categorie']; ?></td>  
                            				<td><?php echo $donnees['nom_produit']; ?></td> 
                            				<td> <?php echo $donnees['Quantite']; ?></td>
                        				</tr> 
                       
            						<?php } 
								?>

							</table>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-bordered table-hover">
								<label> <h3>Listing Des Levures</h3> </label>
            					<thead class="thead-dark">
                					<tr>
                    					<th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                					</tr>
            					</thead>
        						<?php
        						$requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        							FROM produits
        							LEFT JOIN categorie 
        							ON categorie.id_categorie = produits.id_categorie 
        							WHERE categorie.nom_categorie = "LEVURES"
        							ORDER BY produits.Quantite ASC');
        
        						while ($donnees = $requete->fetch()) { ?>
                        			<tr>
                            			<td><?php echo $donnees['nom_categorie']; ?></td>  
                            			<td><?php echo $donnees['nom_produit']; ?></td> 
                            			<td> <?php echo $donnees['Quantite']; ?></td>
                        			</tr> 
                       
            					<?php  }?>

							</table>

<table class="table table-bordered table-hover">
<label> <h3>Listing Des Ameleorants</h> </label>
            <thead class="thead-dark">
                <tr>
                    <th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                </tr>
            </thead>
        <?php
        $requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        FROM produits
        LEFT JOIN categorie 
        
        ON categorie.id_categorie = produits.id_categorie 
        WHERE categorie.nom_categorie = "AMELEORANTS"
        ORDER BY produits.Quantite ASC');
        
         while ($donnees = $requete->fetch()) { ?>
                        <tr>
                            <td><?php echo $donnees['nom_categorie']; ?></td>  
                            <td><?php echo $donnees['nom_produit']; ?></td> 
                            <td> <?php echo $donnees['Quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }

            
?>

</table>

<table class="table table-bordered table-hover">
<label> <h3>Listing Des Beures</h3> </label>
            <thead class="thead-dark">
                <tr>
                    <th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                </tr>
            </thead>
        <?php
        $requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        FROM produits
        LEFT JOIN categorie 
        
        ON categorie.id_categorie = produits.id_categorie 
        WHERE categorie.nom_categorie = "BEURES"
        ORDER BY produits.Quantite ASC');
        
         while ($donnees = $requete->fetch()) { ?>
                        <tr>
                            <td><?php echo $donnees['nom_categorie']; ?></td>  
                            <td><?php echo $donnees['nom_produit']; ?></td> 
                            <td> <?php echo $donnees['Quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }

            
?>

</table>

<table class="table table-bordered table-hover">
<label> <h3>Listing Des Sels</h3> </label>
            <thead class="thead-dark">
                <tr>
                    <th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                </tr>
            </thead>
        <?php
        $requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        FROM produits
        LEFT JOIN categorie 
        
        ON categorie.id_categorie = produits.id_categorie 
        WHERE categorie.nom_categorie = "SELS"
        ORDER BY produits.Quantite ASC');
        
         while ($donnees = $requete->fetch()) { ?>
                        <tr>
                            <td><?php echo $donnees['nom_categorie']; ?></td>  
                            <td><?php echo $donnees['nom_produit']; ?></td> 
                            <td> <?php echo $donnees['Quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }

            
?>

</table>
                              
                            </div>   
                            <div class="col-md-4">
                            
                            <table class="table table-bordered table-hover">
							<label> <h3>Listing Des Riz</h3> </label>
            <thead class="thead-dark">
                <tr>
                    <th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                </tr>
            </thead>
        <?php
        $requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        FROM produits
        LEFT JOIN categorie 
        
        ON categorie.id_categorie = produits.id_categorie 
        WHERE categorie.nom_categorie = "RIZ"
        ORDER BY produits.Quantite ASC');
        
         while ($donnees = $requete->fetch()) { ?>
                        <tr>
                            <td><?php echo $donnees['nom_categorie']; ?></td>  
                            <td><?php echo $donnees['nom_produit']; ?></td> 
                            <td> <?php echo $donnees['Quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }

            
?>

</table>

<table class="table table-bordered table-hover">
<label> <h3>Listing Des Sucres</h3> </label>
            <thead class="thead-dark">
                <tr>
                    <th>Categories</th> <th>Produit</th> <th>Quantites en stock</th>
                </tr>
            </thead>
        <?php
        $requete =$connexion->query('SELECT DISTINCT produits.nom_produit, categorie.nom_categorie, produits.Quantite
        FROM produits
        LEFT JOIN categorie 
        
        ON categorie.id_categorie = produits.id_categorie 
        WHERE categorie.nom_categorie = "SUCRES"
        ORDER BY produits.Quantite ASC');
        
         while ($donnees = $requete->fetch()) { ?>
                        <tr>
                            <td><?php echo $donnees['nom_categorie']; ?></td>  
                            <td><?php echo $donnees['nom_produit']; ?></td> 
                            <td> <?php echo $donnees['Quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }

            
?>

</table>


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
	  <p><a class="btn btn-success center-block btn-block" href="mouvement_des_stocks.php" role="button">Terminer &raquo;</a></p>
          
		  
   
		 <footer class="footer">
		   <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
		 </footer>
   
	   </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
