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

        function verif_produit ($variable)
        { // cette fonction permet de verifier si un score existe deja dans la bd
            global $connexion;// liason avec la bd
            $requete = $connexion->prepare('SELECT id_produit 
                                            FROM produits 
                                            where id_produit = :id');
            $requete->execute(['id' => $variable]);
        
            return (bool) $requete->rowCount();
        }
    $fornisseur = $_POST['fournisseur'];
    $dates = date('d/m/Y');

    $id_produit1 = $_POST['produit1'];
    $id_categorie1 = $_POST['categorie1'];
    $qtes1 = $_POST['quantite1'];

    //ligne de commande 1
    $id_produit2 = $_POST['produit2'];
    $id_categorie12 = $_POST['categorie2'];
    $qtes2 = $_POST['quantite2'];
    //ligne de commande 2
    $id_produit3 = $_POST['produit3'];
    $id_categorie3 = $_POST['categorie3'];
    $qtes3 = $_POST['quantite3'];
    
    $v1 = "none";
    $v2 = 0;

if(($id_produit1 !== $v1) & ($qtes1 !== $v2) & ($id_categorie1 !== $v1)){
    if(verif_produit($id_produit1))
    {   
        // si le score existe, alors on l'update
        $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite + :qte 
                                        WHERE id_produit=:id_p');
        $requete->execute(array('qte' =>$qtes1 ,  
                            'id_p' =>$id_produit1));
    }
    $requete = $connexion->prepare('INSERT INTO livraison_fournisseur (id_fournisseur, id_produit,  quantite,  dates) 
                                        VALUES (:num, :pro,  :qte,  :dates)');
        $requete->execute(array('num' =>$fornisseur , 
                                'pro' =>$id_produit1,
                                'qte' =>$qtes1,
                                'dates' => $dates));
}

if(($id_produit2 !== $v1) & ($qtes2 !== $v2) & ($id_categorie2 !== $v1)){
    if(verif_produit($id_produit2))
    {   
        // si le score existe, alors on l'update
        $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite + :qte 
                                        WHERE id_produit=:id_p');
        $requete->execute(array('qte' =>$qtes2 ,  
                            'id_p' =>$id_produit2));
    }
    $requete = $connexion->prepare('INSERT INTO livraison_fournisseur (id_fournisseur, id_produit,  quantite,  dates) 
                                        VALUES (:num, :pro,  :qte,  :dates)');
        $requete->execute(array('num' =>$fornisseur , 
                                'pro' =>$id_produit2,
                                'qte' =>$qtes2,
                                'dates' => $dates));
}

if(($id_produit3 !== $v1) & ($qtes2 !== $v2) & ($id_categorie3 !== $v1)){
    if(verif_produit($id_produit3))
    {   
        // si le score existe, alors on l'update
        $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite + :qte 
                                        WHERE id_produit=:id_p');
        $requete->execute(array('qte' =>$qtes3 ,  
                            'id_p' =>$id_produit3));
    }
    $requete = $connexion->prepare('INSERT INTO livraison_fournisseur (id_fournisseur, id_produit,  quantite,  dates) 
                                        VALUES (:num, :pro,  :qte,  :dates)');
        $requete->execute(array('num' =>$fornisseur , 
                                'pro' =>$id_produit3,
                                'qte' =>$qtes3,
                                'dates' => $dates));
}

            header('location:entrer.php');


?>
