<?php

$age = $_POST['age'];

if( $age >= 18 ){

    echo "<script>alert(\"vous pouvez entrer sur le site\")</script>";
} else {
   
    echo  "<script>alert(\"vous ne pouvez pas entrer sur le site\")</script>" ;
}
    



?>



