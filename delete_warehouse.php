<?php
include 'config.php';
if(isset($_GET['wid'])){
    $WID=$_GET['wid'];
    $sql="DELETE FROM `warehouse` WHERE `WID`='$WID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_warehouse.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>