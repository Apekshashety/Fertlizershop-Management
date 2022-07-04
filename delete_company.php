<?php
include 'config.php';
if(isset($_GET['cid'])){
    $CID=$_GET['cid'];
    $sql="DELETE FROM `company` WHERE `CID`='$CID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        header('location:display_company.php');
    }
    else{
        echo "<script>alert('Didnt delete');</script>";
        die(mysqli_error($connect));
    }
}
?>