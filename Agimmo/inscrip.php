<?php
     include('connectDB.php');
   $Msg="";
   try {
        if (isset($_POST['valider'])and ($_POST['word']==$_POST['word2'])and !empty($_POST['nom']))
        {
            $query= "INSERT INTO DEMACHEUR(nomdem,prendem,datenais,sexe,email,nomuser,motpass,confirm)VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['datenais']."','".$_POST['sexe']."','".$_POST['email']."','".$_POST['ident']."','".$_POST['word']."','".$_POST['word2']."')"; 
            $result = $conn->query($query);
           /* echo "enregistrement effectué avec succès<br>";*/ 

            $query="SELECT nomuser,motpass FROM DEMACHEUR ";
            $result=$conn->query($query);
            while($row = $result->fetch_assoc())
            {
            header("location:connex.php ");
            }
        }elseif (isset($_POST['valider']))
        {
           $Msg="Veuillez vérifier le mot de passe<br>";   
        }
   } catch (mysqli_sql_exception $e) {
    $Msg="Ce nom d'utilisateur est deja utilisé";
   }
     
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="compte.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="backimg"></div>

    <form action="inscrip.php" method="POST">
    <fieldset id="inscription">
        <legend></legend>
        <div class="logo">
            
            <h2><span class="logo">A</span>gimmo</h2> 
        </div>
        <p>
            <label for="Nom">Nom: </label>
            <input type="text" id="nom" name="nom" placeholder="Veuillez entrer votre nom" tabindex="1">
        </p>
        <p>
            <label for="Prénom(s)">Prénoms: </label>
            <input type="text" id="pre" name="prenom" placeholder="Veuillez entrer votre ou vos prénoms" tabindex="2">
        </p>
        <p>
            <label for="Date de naissance">Date de naissance: </label>
            <input type="date" id="nais" name="datenais" placeholder="" tabindex="3">
        </p>
        <p>
            <label for="Sexe">Sexe: </label>
           <select name="sexe" id="sex" tabindex="4">
            <option value="" area-disabled></option>
            <option value="Masculin">Masculin</option>
            <option value="Féminin">Féminin</option>
           </select>
        </p>
        <p>
            <label for="E-mail">E-mail: </label>
            <input type="email" id="email" name="email" required="" placeholder="Entrer votre adresse électronique" tabindex="5">
        </p>
        <p>
            <label for="Nom d'utilisateur">Nom d'utilisateur: </label>
            <input type="text" required="" id="ident" name="ident" placeholder="Entrer un nom d'utilisateur" tabindex="5">
        </p>
        <p>
            <label for="Mot de passe">Mot de pase: </label>
            <input type="password" required="" id="pass" name="word" placeholder="" tabindex="6">
        </p>
        <p>
            <label for="Confirmer votre mot de passe">Confirmer le mot de passe: </label>
            <input type="password" required="" id="confirm" name="word2" placeholder="" tabindex="7">
        </p>
        <div id="error"><?php echo $Msg;?></div>

        <div id="but">
            <input type="submit" id="envoyer" name="valider" value="Valider">
            <input type="reset" id="reset" name="effacer" value="Annuler">
    </div>
    </fieldset>
    </form>
        
</body>
</html>