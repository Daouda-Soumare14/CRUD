 

<?php
 
    require "connection.php";
    $id = $_GET['id'];

    if (!empty($_GET )) {
        if (!empty($id)) {
            $query = "DELETE from article where id = $id";
            $db->exec($query);
        //     if ($execute) {
        //         echo "Vous avez supprimer un article";
        //     } else {
        //         echo "Suppression échoué";
        //     }
    } 
    header('location: http://localhost/projet/affichage.php');
}

