<?php
  include ('connectDB.php');
  $Demacheur= $_GET['dem'];
  echo $Demacheur;
    $i=1;
  $query="select * from bien,demacheur where nomuser='".$Demacheur."' and bien.demarcheur=demacheur.id";
        $result=mysqli_query($conn,$query) ;
        $row=mysqli_fetch_assoc($result);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="biblio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <caption>Mes Enregistrements</caption>
        <thead>
            <tr>
                <td>N°</td>
                <td>Désignation</td>
                <td>Opération</td>
                <td>Type</td>
                <td>Localité</td>
                <td>Prix</td>
                <td>Contact</td>
                <td>Date de dépot</td>
                <td colspan="2">Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['DESIGNATION']?></td>
                    <td><?php echo $row['Operation']?></td>
                    <td><?php echo $row['typebien']?></td>
                    <td><?php echo $row['Localité']?></td>
                    <td><?php echo $row['Leprix']?></td>
                    <td><?php echo $row['CONTACT']?></td>
                    <td><?php echo $row['DateDepot']?></td>
                    <td><a href="">Modifier</a></td>
                    <td><a href="">Supprimer</a></td>
                   
                </tr>
             <?php $i=$i+1;
                 endwhile;?>
        </tbody>
    </table>
</body>
</html>