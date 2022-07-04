<?php

include 'config.php';
$wid=$_GET['wid'];
$sql="Select * from `warehouse` where wid=$wid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$WID=$row['WID'];
        $AVAILABLESTOCK=$row['AVAILABLESTOCK'];
        $SOLDOUTSTOCK=$row['SOLDOUTSTOCK'];

if(isset($_POST['submit'])){
    $WID=$_GET['wid'];
    
    $AVAILABLESTOCK=$_POST['AVAILABLESTOCK'];
 
    $SOLDOUTSTOCK=$_POST['SOLDOUTSTOCK'];
    $sql="UPDATE `warehouse` SET `AVAILABLESTOCK` = '$AVAILABLESTOCK',`SOLDOUTSTOCK`='$SOLDOUTSTOCK' WHERE `WID` = $WID";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('updated successfully');</script>";
        header("Location:display_warehouse.php");
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
    <a href="./display_warehouse.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE WAREHOUSE</u></h4>

    <form  method="post">
        <div class="row">
            
        
                <label for='AVAILABLESTOCK' class="control-label">Available stock</label>
                <input type="text" id='AVAILABLESTOCK' name='AVAILABLESTOCK' class="form-control" placeholder="Available stock"
                value=<?php echo $AVAILABLESTOCK;?>>
              
                <label for='SOLDOUTSTOCK' class="control-label">soldout stock</label>
                <input type="text" id='SOLDOUTSTOCK' name='SOLDOUTSTOCK' class="form-control" placeholder="Soldout stock"
                value=<?php echo $SOLDOUTSTOCK;?>>  <br><br>

                <input type="submit" name="submit" value="Submit">
 
    </form>                               


    </body>
</html>