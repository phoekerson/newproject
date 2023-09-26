<?php

$con = new mysqli('localhost', 'root', '' , 
'commanderepas');
if(!$con){
    die(mysqli_error($con));
}


?>