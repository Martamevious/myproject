<?php
  include('connectDB.php');
  $utilisateur=$_GET['myuser'];
  
  $query="select id,nomdem,prendem from demacheur where nomuser='".$utilisateur."'";
        $result=mysqli_query($conn,$query) ;
        $row=mysqli_fetch_assoc($result);
        $idem=$row['id'];
    
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="Agimmo.css">
    <link rel="stylesheet" href="offre.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôt d'offres</title>
</head>
<body>
    <nav >
        <div class="logo">
            <div id="cercle"></div>
            <div id="form"></div>   
            <h2><span>A</span>gimmo</h2> 
        </div>
        <li > <a href="Agimmo.php">Accueil</a> </li>
        <li> <a href="Agimmo.php">Vente</a> </li>
        <li> <a href="Agimmo.php">Location</a> </li>
        <li id="me"> <a href="#">Offres</a> </li>
        <li> <a href="contact.php">Nous contacter</a> </li>
        <li> <a href="contact.php"></a> </li>
       <li class="profil">
        <span>&#9660;</span>
           <p class="profil">
            <?php
                
                echo $row['nomdem']." ". $row['prendem'];
                ?>
           </p>
                
           <div class="profil"></div>
           <ul id="sous">
            <li>Mon Profil</li>
            <li><a href="connex.php"><i class="fa fa-sign-out"></i>
Deconnexion</a></li>
           </ul>
       
       </li>
           
    </nav>
   

    <main>
    <div id="mesliens"><a href=<?php echo"Biblio.php?dem=$utilisateur";?>>Mes Enregistrements</a></div>
       <div id="backimg"></div>
        <form action="" method="post">
           <fieldset>
                <legend></legend>
                <p>
                    <label for="Type de bien">Type de bien : </label>
                    <select name="sele" id="choix" tabindex="1">
                        <option value=""></option>
                        <option value="Maison" name="Maison">Maison</option>
                        <option value="Terrain">Terrain</option>
                        <option value="Chambres">Chambres</option>
                        </optgroup>
                    </select>
                </p>
                <input type="submit" value="valider" name="valider" id="valid">
            <?php
              $choix;
            if (isset($_POST['valider'])): 
                $choix=$_POST['sele'];
             
              if($choix=='Maison'):?>
               
                vous avez choisi le bien maison </br>
                <form action="offre.php" method="post">
                <fieldset id="maison">
                <p>
                    <label for="Designation">Désignation: </label>
                    <input type="text" name="design">
                </p>
                <p>
                    <label for="Prix">Prix en FCFA: </label>
                    <input type="text" name="prix">
                </p>
                <p>
                            <label for="Opération">Opération: </label>
                            <select name="ope" class="op">
                            <option value=""></option>
                            <option value="A LOUER">A LOUER</option>
                            <option value="A VENDRE">A VENDRE</option>
                        </select>
                        </p>
                <p>
                    <label for="Localité">Localité: </label>
                    <select name="local" class="loc">
                        <option value=""></option>
                          <?php 
                           $query1="select * from localite";
                           $result1=mysqli_query($conn,$query1);
                          while($row1=mysqli_fetch_assoc($result1)):?>
                            <option value="<?php echo $row1['LibLoc'] ?>"><?php echo $row1['LibLoc'] ?></option>
                           <?php endwhile; ?>
                     </select>
                </p>
               
                <p>
                    <label for="Contact">Contact: </label>
                    <input type="text" name="num">
                </p>
                <p>
                    <label for="Date Dépôt">Date Dépôt: </label>
                    <input type="date" name="date">
                </p>
               <input type="submit" value="Envoyer" id="envoyer" name="sendzon">
             </fieldset>  
                </form>
                 
               <?php elseif($choix=='Terrain'):?>
                
                    vous avez choisi le bien Terrain </br>
                    <form action="offre.php" method="post">
                    <fieldset id="Terrain">
                   <p>
                       <label for="Nombre de lot">Nombre de lot: </label>
                       <input type="text" name="design">
                   </p>
                   <p>
                       <label for="Prix">Prix en FCFA: </label>
                       <input type="text" name="prix">
                   </p>
                   <p>
                            <label for="Opération">Opération: </label>
                            <select name="ope" class="op">
                            <option value=""></option>
                            <option value="A LOUER">A LOUER</option>
                            <option value="A VENDRE">A VENDRE</option>
                        </select>
                        </p>
                   <p>
                       <label for="Localité">Localité: </label>
                       <select name="local" class="loc">
                       <option value=""></option>

                          <?php
                           $query1="select * from localite";
                           $result1=mysqli_query($conn,$query1);
                          while($row1=mysqli_fetch_assoc($result1)):?>
                            <option value="<?php echo $row1['LibLoc'] ?>"><?php echo $row1['LibLoc'] ?></option>
                           <?php endwhile; ?>
                     </select>
                   </p>
                  
                   <p>
                       <label for="Contact">Contact: </label>
                       <input type="text" name="num">
                   </p>
                   <p>
                   <label for="Date Dépôt">Date Dépôt: </label>
                   <input type="date" name="date">
               </p>
                  <input type="submit" value="Envoyer" id="envoyer" name="sendTer">

                  
                </fieldset>     
                    </form>
                    
               

                <?php elseif($choix=='Chambres'):?>
                    
                        vous avez choisi le bien Chambre </br>
                        <form action="offre.php" method="post">
                        <fieldset id="Chambre">
                        <p>
                        <label for="Designation">Désignation: </label>
                        <input type="text" name="design">
                        </p>
                        <p>
                            <label for="Prix">Prix en FCFA: </label>
                            <input type="text" name="prix">
                        </p>
                        <p>
                            <label for="Opération">Opération: </label>
                            <select name="ope" class="op">
                            <option value=""></option>
                            <option value="A LOUER">A LOUER</option>
                            <option value="A VENDRE">A VENDRE</option>
                        </select>
                        </p>
                        <p>
                            <label for="Localité">Localité: </label>
                            <select name="local" class="loc">
                            <option value=""></option>

                          <?php 
                           $query1="select * from localite";
                           $result1=mysqli_query($conn,$query1);
                          while($row1=mysqli_fetch_assoc($result1)):?>
                            <option value="<?php echo $row1['LibLoc'] ?>"><?php echo $row1['LibLoc'] ?></option>
                           <?php endwhile; ?>
                     </select>
                        </p>
                    
                        <p>
                            <label for="Contact">Contact: </label>
                            <input type="text" name="num">
                        </p>
                        <p>
                        <label for="Date Dépôt">Date Dépôt: </label>
                        <input type="date" name="date">
                    </p>
                       <input type="submit" value="Envoyer" id="envoyer" name="sendch">
                     </fieldset>  
                        </form>
                       
                    <?php else :?>
                      
                        Veuillez choisir un type de bien et valider
                    <?php endif; ?>
                
                   
               
                
               
                
               
                <?php endif; ?>
                <?php
                if (isset($_POST['sendzon']))
                {      
                    $typ='Maison';           
                    
                        $query="INSERT INTO BIEN(DESIGNATION,Operation,typebien,Localité,Leprix,demarcheur,CONTACT,Datedepot) VALUES ('".$_POST['design']."','".$_POST['ope']."','".$typ."','".$_POST['local']."','".$_POST['prix']."','".$idem."','".$_POST['num']."','".$_POST['date']."')";
                        $result=mysqli_query($conn,$query);
                        echo"Enregistrement effective";
                   
                } elseif (isset($_POST['sendTer'])) {
                    $typ='Terrain';           

                    $query="INSERT INTO BIEN(DESIGNATION,Operation,typebien,Localité,Leprix,demarcheur,CONTACT,Datedepot) VALUES ('".$_POST['design']."','".$_POST['ope']."','".$typ."','".$_POST['local']."','".$_POST['prix']."','".$idem."','".$_POST['num']."','".$_POST['date']."')";
                        $result=mysqli_query($conn,$query);
                        echo"Enregistrement effective";

                } elseif (isset($_POST['sendch'])) {
                    $typ='Chambre';           

                     $query="INSERT INTO BIEN(DESIGNATION,Operation,typebien,Localité,Leprix,demarcheur,CONTACT,Datedepot) VALUES ('".$_POST['design']."','".$_POST['ope']."','".$typ."','".$_POST['local']."','".$_POST['prix']."','".$idem."','".$_POST['num']."','".$_POST['date']."')";
                        $result=mysqli_query($conn,$query);
                        echo"Enregistrement effective";
                }
                ?>
        </form>
      
        
       

    </main>
    
    <footer>

    </footer>
</body>
</html>