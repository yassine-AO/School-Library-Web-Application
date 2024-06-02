<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
<title>
    Connexion
</title>
<link rel="stylesheet" href="se_connecter_adherent_style.css">

</head>

<body>

    <img src="img/hemlogo.png" alt="ERROR" title="HEM" class="hemlogo"> 

    <h1 style="text-decoration: underline;" align="center">
     CONNEXION ADHERENT
    </h1>
    <br>

     <form action="check_connexion.php" method="post">
        <br>
        <br>
        <div>
            <label>ID</label>
            <input type="number" required placeholder="Votre ID (numérique)" name="id__adherent">
        </div>
        <br>
        <div>
            <label>Mot De Passe</label>
            <input type="password" required placeholder="MOT DE PASSE" name="mot__de_passe_adherent">
        </div>
        <br>
        <input type="submit" value="SE CONNECTER" name="connect">

       
     </form>
</body>


</html>