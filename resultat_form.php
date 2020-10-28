<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
</head>
 
<body>
 
    <!-- L'en-tête -->
    
    <?php include("tete.php"); ?>
    
    <!-- Le menu -->
    
    <?php include("menu.php"); ?>
    
    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super résultat de formulaire</h1>
        
        
    </div>

    <div>
        <?php
        echo $User1->getAge();
        ?>
    </div>

    <!-- Le pied de page -->

    <?php include("pied.php"); ?>

</body>
</html>



