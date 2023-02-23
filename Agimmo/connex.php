<?php
             include('connectDB.php');
             $Msg="";
       
       if (isset($_GET['valider'])) 
      {
       if(!empty($_GET['ident']) and !empty($_GET['pass']))
        {

           

            $query="SELECT email,nomuser,motpass FROM DEMACHEUR ";
        $result=$conn->query($query);
        $connected=false;
        while($row = $result->fetch_assoc())
        {
            if (($_GET['ident']==$row['nomuser']and $_GET['pass']==$row['motpass']) or ($_GET['ident']==$row['email']and $_GET['pass']==$row['motpass'])) 
            {

                // echo "connexion ok<br>";
                
                $connected=true;
                // break;
                $user=$_GET['ident'];
                header("Location:offre.php?myuser=$user");
                exit;
            }
              
        }
        if (!$connected)
              {
                $Msg="Identifiant ou mot de passe incorrect<br>";
                
              }

       }else 
         { echo "<fieldset>";
            echo "Veuillez remplir tous les champs";
            echo "</fieldset>";
         }
      } 
     
       
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compte.css">
    <title>Document</title>
</head>
<body>
<div id="backimg"></div>

    <form action="" method="get">
    <fieldset id="connexion">
    <div class="logo">

    
            <h2><span class="logo">A</span>gimmo</h2> 
        </div> 
    </br>
    <p>
        <label for="Identifiant: "></label>
        <input type="text" id="ident" required="" name="ident" placeholder="Identifiant ou adresse électronique">
    </p>
    <p>
        <label for="Mot de passe: "></label>
        <input type="password" id="pass"  required="" name="pass" placeholder="Mot de passe">
    </p>
    <div id="recup">
    <a href="inscrip.php">S'incrire</a>
    <a href="PassNew.php">Mot de passe oublié ?</a>
</div>
<div id="error"><?php echo $Msg;?></div>
    <input type="submit" id="envoyer" name="valider" value="Valider">

    </fieldset>
        
    </form>

   
</body>
</html>