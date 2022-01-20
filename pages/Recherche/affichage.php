"<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="../../css/style.css" rel="stylesheet">


        <title>MS System</title>
    </head>
    <body>
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
  
            <?php
try{
    // connexion a la bdd
    $connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
 $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$num = $_POST['num'];

function verif_facture ($variable){ // cette fonction permet de verifier si un score existe deja dans la bd
    global $connexion;// liason avec la bd
    $requete = $connexion->prepare('SELECT num_facture 
                            FROM commande 
                            where num_facture = :id');
    $requete->execute(['id' => $variable]);

    return (bool) $requete->rowCount();
} ?>
        
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
                                <div class="container">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Produits</th> <th>Quantites</th> 
                                            </tr>
                                        </thead>
                                        <?php
                                        if(verif_facture($num)){
                                            $requete =$connexion->prepare('SELECT client.nom_client
                                                FROM commande
                                                LEFT JOIN client 
                                                ON client.id_client = commande.id_client
                                                WHERE num_facture = :idr
                                            
                                            ');
                                            $requete->execute(['idr' => $num]);
                                        } 
                                            $donnees = $requete->fetch() ?>
                                            <tr><?php 
                                                echo "<h3> Nom Client: </h3> <h3 color = 'blue'> ".$donnees['nom_client']."</h3>";
                                                
                                            ?></tr>
                                            <tr>
                                                <?php
                                                if(verif_facture($num)){
                                                    $requet =$connexion->prepare('SELECT produits.nom_produit, commande.quantite
                                                        FROM commande
                                                        LEFT JOIN produits 
                                                        ON produits.id_produit = commande.id_produit
                                                        WHERE num_facture = :idr
                                                    
                                                    ');
                                                    $requet->execute(['idr' => $num]);
                                                } 
                                                 while ($donnees = $requet->fetch()) { ?>
                            
                                                <td><?php  echo $donnees['nom_produit']; ?></td> 
                                                <td> <?php echo $donnees['quantite']; ?></td>
                        </tr> 
                       
            <?php        
            }
?>

</table>
      </div>
        </div>
       
        <footer class="footer">
            <p>&copy; 2021 Wenkam 21U2522, Tous droit reserve.</p>
        </footer>


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>