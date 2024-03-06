<?php
include 'connect.php';
$id=$_GET['id'];
$sql="UPDATE `book` SET `status` = 'accept' WHERE `book`.`id` ='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
    header('location:laborerpanel.php');
}
?>