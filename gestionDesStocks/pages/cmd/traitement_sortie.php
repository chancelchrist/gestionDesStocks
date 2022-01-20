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
    
    $code = $_POST['num'];
    $nom = $_POST['client'];
    $dates = date('d/m/Y');
    $dest = $_POST['dest'];
    //ligne de commande 1
    $id_produit = $_POST['produit1'];
    $qtes = $_POST['quantite1'];
    //ligne de commande 2
    $id_produit2 = $_POST['produit2'];
    $qtes2 = $_POST['quantite2'];
    //ligne de commande 3
    $id_produit3 = $_POST['produit3'];
    $qtes3 = $_POST['quantite3'];
    //ligne de commande 4
    $id_produit4 = $_POST['produit4'];
    $qtes4 = $_POST['quantite4'];
    //ligne de commande 5
    $id_produit5 = $_POST['produit5'];
    $qtes5 = $_POST['quantite5'];
    //ligne de commande 6
    $id_produit6 = $_POST['produit6'];
    $qtes6 = $_POST['quantite6'];
    //ligne de commande 7
    $id_produit7 = $_POST['produit7'];
    $qtes7 = $_POST['quantite7'];
    
    $v1 = "none";
    $v2 = 0;
    if(($id_produit !== $v1) & ($qtes !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit,
                                'cli' =>$nom,
                                'qte' =>$qtes,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes ,  
                            'id_p' =>$id_produit));
        }
    }
    // enregistrement 2
    if(($id_produit2 !== $v1) & ($qtes2 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit2,
                                'cli' =>$nom,
                                'qte' =>$qtes2,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit2)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes2 ,  
                            'id_p' =>$id_produit2));
        }
    }

    if(($id_produit3 !== $v1) & ($qtes3 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit3,
                                'cli' =>$nom,
                                'qte' =>$qtes3,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit3)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes3 ,  
                            'id_p' =>$id_produit3));
        }
    }

    if(($id_produit4 !== $v1) & ($qtes4 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit4,
                                'cli' =>$nom,
                                'qte' =>$qtes4,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit4)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes4 ,  
                            'id_p' =>$id_produit4));
        }
    }

    if(($id_produit5 !== $v1) & ($qtes5 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit5,
                                'cli' =>$nom,
                                'qte' =>$qtes5,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit5)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes5 ,  
                            'id_p' =>$id_produit5));
        }
    }

    if(($id_produit6 !== $v1) & ($qtes6 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit6,
                                'cli' =>$nom,
                                'qte' =>$qtes6,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit6)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes6 ,  
                            'id_p' =>$id_produit6));
        }
    }

    if(($id_produit7 !== $v1) & ($qtes7 !== $v2)){
        $requete = $connexion->prepare('INSERT INTO commande (num_facture,id_produit, id_client, quantite, destination, dates) 
                                        VALUES (:num, :pro, :cli, :qte, :dest, :dates)');
        $requete->execute(array('num' =>$code , 
                                'pro' =>$id_produit7,
                                'cli' =>$nom,
                                'qte' =>$qtes7,
                                'dest' =>$dest,
                                'dates' => $dates));
        if(verif_produit($id_produit7)){   
            // si le score existe, alors on l'update
            $requete = $connexion->prepare('UPDATE produits 
                                        SET  Quantite = Quantite - :qte 
                                        WHERE id_produit=:id_p');
            $requete->execute(array('qte' =>$qtes7 ,  
                            'id_p' =>$id_produit7));
        }
    }
    


            header('location:sortie.php');


?>
