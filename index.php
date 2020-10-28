

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
        <link rel="stylesheet" href="style.css">
</head>
 
<body>
 
    <!-- L'en-tête -->
    
    <?php include("tete.php"); ?>
    
    <!-- Le menu -->
    
    <?php include("menu.php"); ?>
    
    <!-- Le corps -->
    <h2>Formulaire</h2>
    <form action="traitement_form.php" method="post">
        <?php
        if (isset($_GET["erreurPrenom"]))
        {
            echo "<p class=oubli>n'oubliez pas votre prénom</p> ";
        }
        ?>
        <label for="pren">Votre prénom :</label><input type="text" name="prenom" id="pren"><br><br>
        <label for="name">Votre nom :</label><input type="text" name="nom" id="name"><br><br>
        <label for="age">Votre age : </label><input type="number" name="age" id="age"><br><br>
        <label for="secu">Numero de sécu :</label><input type="number" name="secu" id="secu"><br><br>
        <label for="adress">Votre adresse :</label><input type="text" name="adress" id="adress"><br><br>
        <label for="contact">Votre contact :</label><input type="text" name="contact" id="contact"><br><br>
        <input type="submit" value="gogogo">
        </form>
   

    <!-- Le pied de page -->

    <?php include("pied.php"); ?>


    
    

</body>
</html>