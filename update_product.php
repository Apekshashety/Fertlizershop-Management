<?php

include 'config.php';
$pid=$_GET['pid'];
$sql="Select * from `product` where pid=$pid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$CID=$row['CID'];
$FID=$row['FID'];
$PRICE=$row['PRICE'];
if(isset($_POST['submit'])){
    $PID=$_GET['pid'];
    
    $CID=$_POST['CID'];
    $FID=$_POST['FID'];
    $PRICE=$_POST['PRICE'];
    $sql="UPDATE `product` SET `CID`=$CID,`FID`='$FID',`PRICE`=$PRICE WHERE `PID` = $PID";
    $result=mysqli_query($connect,$sql);
    if($result){
     
        header("Location:display_product.php");
        echo "<script>alert('updated successfully');</script>";
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
    <a href="./display_product.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE COMPANY PRODUCTS</u></h4>

    <form  method="post">
        <div class="row">
           
            
        
                <label for='CID' class="control-label">CID</label>
                <input type="text" id='CID' name='CID' class="form-control" placeholder="CID"
                value=<?php echo $CID;?>>

                <label for='FID' class="control-label">FID</label>
                <input type="text" id='FID' name='FID' class="form-control" placeholder="FID"
                value=<?php echo $FID;?>> 
            
                <label for='PRICE' class="control-label">Price</label>
                <input type="text" id='PRICE' name='PRICE' class="form-control" placeholder="PRICE"
                value=<?php echo $PRICE;?>>  
   
             
                
                <br><br>

                <input type="submit" name="submit" value="Submit">  
    
 
    </form>                               


    </body>
</html