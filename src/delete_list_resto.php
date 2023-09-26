<?php
include 'connect.php';
if(isset($_GET['delete_list_restoid'])){
    $idk = $_GET['delete_list_restoid'];
    $sql = "DELETE FROM `crudbcm` WHERE idk=$idk";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:user_resto.php');
    }else{
        die(mysqli_error($con));
    }
}