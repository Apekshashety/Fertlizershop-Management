<?php
include 'config.php';
if(isset($_GET['fid'])){
    $FID=$_GET['fid'];
    $sql="DELETE FROM `fertilizer` WHERE `FID`='$FID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_fertilizer.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>