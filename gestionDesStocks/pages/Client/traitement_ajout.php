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



    $num_client = $_POST['tel'];
    $nom_client = strtoupper($_POST['nom']);
 
    $requete = $connexion->prepare('INSERT INTO client (nom_client, telephone) 
                                            VALUES (:nom, :tel)');
            $requete->execute(array('nom' =>$nom_client , 
                                    'tel' =>$num_client 
                                     ));

            header('location:ajout_client.php');


?>