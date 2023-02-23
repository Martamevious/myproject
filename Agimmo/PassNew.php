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

<form action="PassNew.php" method="post">
    <fieldset id="connexion">
    <div class="logo">

    
            <h2><span class="logo">A</span>gimmo</h2> 
        </div> 
    </br>
    <p>
        <label for="Identifiant: "></label>
        <input type="email" id="ident" name="ident" placeholder="Identifiant ou adresse électronique">
    </p>
    <p>
        <label for="Nouveau mot de passe: "></label>
        <input type="password" id="pass"   name="pass" placeholder="Entrez votre nouveau mot de passe">
    </p>
    <p>
        <label for=" mot de passe: "></label>
        <input type="password" id="confirmpass"   name="pass" placeholder="Veuillez confirmer le mot de passe">
    </p>
   
    <input type="submit" id="envoyer" name="valider" value="Valider">

    </fieldset>
    </form>

    <?php
        if (isset($_POST['valider'])) 
        {
            header("Location:connex.php");
        }
    ?>
</body>
</html>