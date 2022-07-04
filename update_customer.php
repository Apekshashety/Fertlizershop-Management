<?php

include 'config.php';
$cusid=$_GET['cusid'];
$sql="Select * from `customer` where cusid=$cusid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
    $CusID=$row['CUSID'];
    $CusNAME=$row['CUSNAME'];
    $Phone=$row['PHONE'];
   
include 'config.php';
if(isset($_POST['submit'])){
    $CUSID=$_GET['cusid'];
    
    $CUSNAME=$_POST['CUSNAME'];
    $PHONE=$_POST['PHONE'];
  
    $sql="UPDATE `customer` SET `CUSNAME`='$CUSNAME',`PHONE`='$PHONE' WHERE `CUSID` = '$CUSID'";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('updated successfully');</script>";
        header("Location:display_customer.php");
        die;
    }else{
        echo "not";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>


<div class="topnav">
    <a href="./display_customer.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE CUSTOMER</u></h4>

    <form  method="post">
        <div class="row">
           
            
        
                <label for='CUSNAME' class="control-label">Customer name</label>
                <input type="text" id='CUSNAME' name='CUSNAME' class="form-control" placeholder="CUSNAME"
                value=<?php echo $CusNAME;?>>
              
                <label for='PHONE' class="control-label">Phone</label>
                <input type="text" id='PHONE' name='PHONE' class="form-control" placeholder="PHONE"
                value=<?php echo $Phone;?>>
   
               

                <br><br>

                <input type="submit" name="submit" value="Submit">  
    
 
    </form>                               


    </body>
</html>