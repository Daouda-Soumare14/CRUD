<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <form method="post">
        <h1>Ecrivez un article</h1>
        <table>
            <p>
                <label for="">Titre:</label><br>
                <input type="text" name="titre">
            </p>
            <p>
                <label for="">Libellé:</label><br>
                <textarea name="libelle" id="" cols="39" rows="10"></textarea><br><br>
            </p>
            <p>
                <label for="">Auteur:</label><br>
                <input type="text" name="auteur">
            </p>
           
            <p>
               <input type="submit" name="button" value="ENVOYER">
            </p>
            <p class="retour"><a href="affichage.php"><span>Click ici</span> </a>pour Afficher les informations</p>
        </table>
    </form>
    <?php
        $connection= mysqli_connect('localhost', 'root', '');
        if(!$connection){
            echo"base de donnee introuvable";
        }
        if(!mysqli_select_db($connection, 'ismi')){
            echo"base de donne introuvable";
        }
        require_once "connection.php";
        if(isset($_POST['titre']) AND ($_POST['libelle']) AND ($_POST['auteur']) AND ($_POST['button'])){
          $titre=$_POST['titre'] ;
          $libelle=$_POST['libelle'];
          $auteur=$_POST['auteur'];
          $sql="INSERT INTO article(titre,libelle,auteur) VALUES('$titre', '$libelle', '$auteur')";
          if(!mysqli_query($connection, $sql)){
            
            echo"titre invalide";
          }else{
            echo"titre valide";
          }
        }
    ?>
</body>
</html>                                                                                  