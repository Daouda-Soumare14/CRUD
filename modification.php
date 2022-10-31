
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <h1>Ecrivez un Article</h1>
    
            <p>
                <label for="">Titre:</label><br>
                <input type="text" name="titre" value="<?=$id['titre']?>">
            </p>
            <p>
                <label for="">Libellé:</label><br>
                <textarea name="libelle" id="" cols="39" rows="10"><?=$id['libelle']?></textarea><br><br>
            </p>
            <p>
                <label for="">Auteur:</label><br>
                <input type="text" name="auteur" value="<?=$id['auteur']?>">
            </p>
           
            <p>
               <input type="submit" name="button" value="ENVOYER">
            </p>
    </form>

    <?php

     $db = new PDO ('mysql:host=localhost; dbname=ismi; sarcheet=utf', 'root','');
     if(isset($_GET['id']) and empty($_GET['id'])){
       
        $id= htmlspecialchars($_GET['id']);
        $id= $db->prepare('SELECT * FROM article WHERE id=');
        $id->execute(erray($id));
        $id = $id->fetch();


        if(isset($_POST['titre']) AND ($_POST['libelle']) AND ($_POST['auteur']) AND ($_POST['button'])){
            $titre= htmlspecialchars ($_POST['titre']) ;
            $libelle= htmlspecialchars ($_POST['libelle']);
            $auteur= htmlspecialchars ($_POST['auteur']);

            $sql="INSERT INTO article(titre,libelle,auteur) VALUES('$titre', '$libelle', '$auteur')";
            $sql->execute(array($titre, $libelle, $auteur));
     }
    }
?>
</body>
</html>