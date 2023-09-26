<?php
include 'connect.php';
if(isset($_GET['delete_phpid'])){
    $ide = $_GET['delete_phpid'];
    $sql = "DELETE FROM `crudbc` WHERE ide=$ide";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:display_hotel.php');
    }else{
        die(mysqli_error($con));
    }
}