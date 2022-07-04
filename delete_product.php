<?php
include 'config.php';
if(isset($_GET['pid'])){
    $PID=$_GET['pid'];
    $sql="DELETE FROM `product` WHERE `PID`='$PID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_product.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>