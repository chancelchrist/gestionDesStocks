<?php 
    try
        {
            // connexion a la bdd
            $connexion = new PDO ('mysql:host=localhost;dbname=gestion_des_stocks', 'root', '');
            $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    catch (PDOException $e) // on verifie s'il ya pas d'erreur
        {
            die('Erreur : ' . $e->getMessage());
        }



    $nom_categorie = $_POST['categorie'];
    $nom_produit = $_POST['nom'];
 
    $requete = $connexion->prepare('INSERT INTO produits (nom_produit, id_categorie, Quantite) 
                                            VALUES (:nom, :id_p, :qte)');
            $requete->execute(array('nom' =>$nom_produit , 
                                    'id_p' =>$nom_categorie ,
                                    'qte' => 0 ));

            header('location:ajout_produit.php');


?>