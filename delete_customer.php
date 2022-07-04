<?php
include 'config.php';
if(isset($_GET['cusid'])){
    $CUSID=$_GET['cusid'];
    $sql="DELETE FROM `customer` WHERE `CUSID`='$CUSID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_customer.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>