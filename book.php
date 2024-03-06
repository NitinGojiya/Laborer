<?php
include 'connect.php';
$l_user= $_GET["user"];
session_start();


$u= $_SESSION['cunm'];
$sql="SELECT * FROM `c_user` where unm='$u'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
$name=$row['cname'];
$add=$row['address'];
}


if (!empty($u)) 
{
    $status="pending";
$sql2="INSERT INTO `book`(`c_user`,`name`, `l_user`, `address`,  `status`) VALUES ('$u','$name','$l_user','$add','$status')";
$result2=mysqli_query($conn,$sql2);
if($result2)
{
    
    header('location:Laborer.php');
}
}
else{
echo '<script>alert("please login first");</script>';

}
?>
