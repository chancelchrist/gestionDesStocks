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



    $nom_fournisseur = strtoupper($_POST['nom']);
 
    $requete = $connexion->prepare('INSERT INTO fournisseur (nom_fournisseur) 
                                            VALUES (:nom)');
            $requete->execute(array('nom' =>$nom_fournisseur
                                    
                                     ));
  
    header('location:ajout_fournisseur.php');


?>