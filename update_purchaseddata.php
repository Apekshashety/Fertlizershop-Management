<?php

include 'config.php';
$sid=$_GET['sid'];
$sql="Select * from `purchased_data` where sid=$sid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$SID=$row['SID'];
$DATE=$row['DATE'];
$CUSID=$row['CUSID'];
$PID=$row['PID'];
$Quantity=$row['QUANTITY'];
$Amount=$row['AMOUNT'];
$WID=$row['WID'];
if(isset($_POST['submit'])){
    $SID=$_GET['sid'];
    $DATE=$_POST['DATE'];
    $CUSID=$_POST['CUSID'];
    $PID=$_POST['PID'];
    $QUANTITY=$_POST['QUANTITY'];
    $WID=$_POST['WID'];
    $query="SELECT * FROM product WHERE PID=$PID";
    $res1=mysqli_query($connect,$query);
    if($res1)
    {
        $row1=mysqli_fetch_assoc($res1);
        $PRICE=$row1['PRICE'];
        $AMOUNT=($QUANTITY / 100)*$PRICE;
       
    $sql="UPDATE `purchased_data` SET `DATE` = '$DATE',`CUSID`=$CUSID,`PID`='$PID',`QUANTITY`='$QUANTITY',`AMOUNT`='$AMOUNT',`WID`='$WID' WHERE `SID` = $SID";
    $result=mysqli_query($connect,$sql);
    if($result){
        $query2="SELECT * FROM warehouse WHERE WID=$WID";
        $res2=mysqli_query($connect,$query2);
        if($res2)
        {
            $row2=mysqli_fetch_assoc($res2);
            $AVAILABLESTOCK=$row2['AVAILABLESTOCK'];
            $SOLDOUTSTOCK=$row2['SOLDOUTSTOCK'];
            if($AVAILABLESTOCK<$QUANTITY)
            {
                echo  "<script>alert('OUT OF STOCK');</script>";
            }
            else{
                $AVAILABLESTOCK= $AVAILABLESTOCK-$QUANTITY;
                $SOLDOUTSTOCK=$SOLDOUTSTOCK+$QUANTITY;
                $sql1="UPDATE `warehouse` SET `AVAILABLESTOCK`='$AVAILABLESTOCK',`SOLDOUTSTOCK`='$SOLDOUTSTOCK' WHERE `WID`=$WID";
                $result2=mysqli_query($connect,$sql1);
                if($result2)
                {
                    echo  "<script>alert('updated successfully');</script>";
                    header("Location:display_purchaseddata.php");
                    die;
                }
                else{
                    echo "not";
                    
                }
            }
        }
      
    }
   
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
    <a href="./display_purchaseddata.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE PURCHASED DATA</u></h4>

    <form  method="post">
        <div class="row">
           
            
        
                <label for='DATE' class="control-label">DATE</label>
                <input type="text" id='DATE' name='DATE' class="form-control" placeholder="DATE"
                value=<?php echo $DATE;?>>
              
                <label for='CUSID' class="control-label">CUS ID</label>
                <input type="text" id='CUSID' name='CUSID' class="form-control" placeholder="CUSID"
                value=<?php echo $CUSID;?>>
   
                <label for='PID' class="control-label">PID</label>
                <input type="text" id='PID' name='PID' class="form-control" placeholder="PID"
                value=<?php echo $PID;?>> 
                
                <label for='QUANTITY' class="control-label">Quantity</label>
                <input type="text" id='QUANTITY' name='QUANTITY' class="form-control" placeholder="QUANTITY"
                value=<?php echo $Quantity;?>>
                
                
                <label for='WID' class="control-label">WID</label>
                <input type="text" id='WID' name='WID' class="form-control" placeholder="WID"
                value=<?php echo $WID;?>> 
                <br><br>

                <input type="submit" name="submit" value="Submit">  
    
 
    </form>                               


    </body>
</html>