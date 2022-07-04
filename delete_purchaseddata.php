<?php
include 'config.php';
if(isset($_GET['sid'])){
    $SID=$_GET['sid'];
    $sql="DELETE FROM `purchased_data` WHERE `SID`='$SID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_purchaseddata.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>