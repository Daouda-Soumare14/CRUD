<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            text-align:center;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th,td{
            text-align:center;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:#f2f2f2;
        }
        th{
            background-color:#04AA6D;
            color:#ffff;
        }
        td a{
            
            border:solid 2px red;
            border-radius:5px;
            background:red;
            color:white;
        }
        td a{
            border:solid 2px red;
            border-radius:5px;
            background:red;
            color:white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les Articles</h1>
    <?php
        require_once('connection.php');
        echo '<table>';
            echo '<tr>';
                echo '<th> Id </th>';
                echo '<th> Titre </th>';
                echo '<th> Libelle </th>';
                echo '<th> Auteur </th>';
                echo '<th> Supprimer </th>';
                echo '<th> Modifier </th>';
            echo '</tr>';
        $sqlQuery ='SELECT * FROM article';
        $recipesStatement=$db->prepare($sqlQuery);
        $recipesStatement->execute();
        $recipes=$recipesStatement->fetchAll();
        foreach($recipes as $recipe){
            $id=$recipe['id'];
          
    ?>
            <tr>
                <td><?php echo $recipe['id'];?></td> 
                <td><?php echo $recipe['titre'];?></td> 
                <td><?php echo $recipe['libelle'];?></td>       
                <td><?php echo $recipe['auteur'];?></td>
                <?php echo "<td><a href='suppression.php?id=$id'>supprimer</a></td>"?>
                <?php echo "<td><a href='modification.php?id=$id'>modifier</a></td>"?>
           
                
                
                   
                   
                
            </tr>
    <?php        
        } 
    ?>  
</body>
</html>