<?php

//strtotime transforme la chaine de caractère en date 
// puis avec la fonction date on indique avec "Y" que l'on veut l'année 
$naissance = date("Y",strtotime($_POST['date']));
$date =  date('Y');
$resultat =  $date - $naissance;

if($resultat >= 18){
    echo "<script>alert(\"vous etes majeur\")</script>";
}else 
echo "<script>alert(\"vous n'etes pas majeur\")</script>";




?>



