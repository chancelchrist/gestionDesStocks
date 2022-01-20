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
    <body>

        <div class="container">
            <div class="header clearfix">
                <nav>
                    <ul class="nav nav-pills pull-right">
                        <li role="presentation" class="active"><a href="../mouvement_des_stocks.php">Home</a></li>
                        <li role="presentation"><a href="../maj.php">Mise a jour</a></li>
                        <li role="presentation"><a href="../entrer/entrer.php">Entrer</a></li>
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
            } catch (PDOException $e){ // on verifie s'il ya pas d'erreur
                die('Erreur : ' . $e->getMessage());}

            $reponse = $connexion->query('SELECT *
                                        FROM client
                                        ORDER BY nom_client ASC');

            $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC');
            $reponseC = $connexion->query('SELECT *
            FROM categorie
            ORDER BY nom_categorie ASC');

$num = $_POST['num'];
function verif_facture ($variable){ // cette fonction permet de verifier si un score existe deja dans la bd
    global $connexion;// liason avec la bd
    $requete = $connexion->prepare('SELECT num_facture 
                            FROM commande 
                            where num_facture = :id');
    $requete->execute(['id' => $variable]);

    return (bool) $requete->rowCount();
}

if(verif_facture($num)){
    $requete =$connexion->prepare('SELECT *
        FROM commande
        WHERE num_facture = :idr
    
    ');
    $requete->execute(['idr' => $num]);
} 
$donnees = $requete->fetch();
$id_produit1 = $donnees['id_produit'];
$qtes1 = $donnees['quantite'];

function verif_produit ($variable)
        { // cette fonction permet de verifier si un score existe deja dans la bd
            global $connexion;// liason avec la bd
            $requete = $connexion->prepare('SELECT id_produit 
                                            FROM produits 
                                            where id_produit = :id');
            $requete->execute(['id' => $variable]);
        
            return (bool) $requete->rowCount();
        } 

if(verif_produit($id_produit1))
    {   
        // si le score existe, alors on l'update
        $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite + :qte 
                                        WHERE id_produit=:id_p');
        $requete->execute(array('qte' =>$qtes1 ,  
                            'id_p' =>$id_produit1));
?>
     
        
            <div class="jumbotron">
                <h1>Modification</h1>
            <div>
        <div class="container  register-form">
            <form method="POST" action="traitement_sortie.php">
                <div class="form" >
                    <div class="note">
                        <p> Entrer les informations qui sont ecrit sur la Facture</p>
                    </div>
                    <div class="form-content">
                        <div class="row align-items-start">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Numero de facture </label> <input type="number" name="num" class="form-control" value="<?php echo $donnees['num_facture']; ?>"  >
                                    <label for="categorie">Categorie du produit 1</label>
                                    <select name="categorie1" id="selection1" class="form-control">
                                    <option value="none" selected>----------</option>
                                        <?php while ($donnees1 = $reponseC->fetch()){ ?>
                                        <option value="<?php echo $donnees1['id_categorie']; ?>"> <?php echo $donnees1['nom_categorie']; ?></option>
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

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 4</label>
                                    <select name="categorie4" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 5</label>
                                    <select name="categorie5" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 6</label>
                                    <select name="categorie6" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponse2 = $connexion->query('SELECT *
                                                                    FROM categorie
                                                                    ORDER BY nom_categorie ASC'); ?>
                                    <label for="categorie">Categorie du produit 7</label>
                                    <select name="categorie7" id="selection1" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees2 = $reponse2->fetch()){ ?>
                                        <option value="<?php echo $donnees2['id_categorie']; ?>"> <?php echo $donnees2['nom_categorie']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                
                            </div>
                            <div class="col-md-4">
                                <div class=" form-group">
                                    <label> Destination </label> <input type="text" name="dest" class="form-control" value="<?php echo $donnees['destination']; ?>">
                                    
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

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 4</label>
                                    <select name="produit4" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 5</label>
                                    <select name="produit5" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 6</label>
                                    <select name="produit6" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>

                                    <?php $reponseProduit = $connexion->query('SELECT *
                                                FROM produits
                                                ORDER BY nom_produit ASC'); ?>
                                    <label for="produit">Nom produit 7</label>
                                    <select name="produit7" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponseProduit->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_produit']; ?>"> <?php echo $donnees['nom_produit']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="produit">Nom du Client</label>
                                    <select name="client" id="selection2" class="form-control">
                                        <option value="none" selected>----------</option>
                                        <?php while ($donnees = $reponse->fetch()) { ?>
                                        <option value="<?php echo $donnees['id_client']; ?>"> <?php echo $donnees['nom_client']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <label> Quantite 1 </label> <input type="number" name="quantite1" class="form-control">
                                    <label> Quantite 2 </label> <input type="number" name="quantite2" class="form-control">
                                    <label> Quantite 3</label> <input type="number" name="quantite3" class="form-control">
                                    <label> Quantite 4</label> <input type="number" name="quantite4" class="form-control">
                                    <label> Quantite 5</label> <input type="number" name="quantite5" class="form-control">
                                    <label> Quantite 6</label> <input type="number" name="quantite6" class="form-control">
                                    <label> Quantite 7</label> <input type="number" name="quantite7" class="form-control">
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-lg btn-primary "type="submit" value="Terminer &raquo;" onclick =  "alert('Facture enregistre avec succes!')">
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


