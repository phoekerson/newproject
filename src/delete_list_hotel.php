<?php
include 'connect.php';
if(isset($_GET['delete_list_hotelid'])){
    $idc = $_GET['delete_list_hotelid'];
    $sql = "DELETE FROM `crudm` WHERE idc=$idc";
    $result = mysqli_query($con,$sql);
    if($result){
        header('location:user_hotel.php');
    }else{
        die(mysqli_error($con));
    }
}