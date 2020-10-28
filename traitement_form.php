<?php 

require('modele.php');



$User1 = new User($_POST['prenom'],$_POST['nom'],$_POST['age'],$_POST['secu'],$_POST['adress'],$_POST['contact']);




require('resultat_form.php');


#header('Location: resultat_form.php');
#exit();      
    ?>
</body>
</html>