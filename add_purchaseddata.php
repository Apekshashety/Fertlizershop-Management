<?php

$host="localhost";
$user = "root";
$pwd = "";
$db = "fertilizer";

$connect = mysqli_connect($host,$user,$pwd,$db);
if(!$connect)
{
    echo "DB not connected.";
}
session_start();
if(isset($_POST['PID'])){
    $PID=$_POST['PID'];
    $CUSID=$_POST['CUSID'];
    $Date=$_POST['DATE'];
    $QUANTITY=$_POST['QUANTITY']; 
    $WID=$_POST['WID']; 
    $query="SELECT * FROM product WHERE PID=$PID";
    $res1=mysqli_query($connect,$query);
    if($res1)
    {
        $row1=mysqli_fetch_assoc($res1);
        $PRICE=$row1['PRICE'];
        $AMOUNT=($QUANTITY / 100)*$PRICE;
        $sql= "INSERT INTO `purchased_data` (`PID`,`CUSID`,`DATE`,`QUANTITY`,`AMOUNT`,`WID`) VALUES ('$PID','$CUSID','$Date','$QUANTITY','$AMOUNT','$WID')";
        $result=mysqli_query($connect,$sql);
        if($result)
            {
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
                }
           
            }
    
        }
        else{
            echo "not";
            
        }
    }

    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charshet="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<div class="topnav">
    <a href="./display_purchaseddata.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT PURCHASED DATA</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">

                <label for='PID' class="control-label">PID</label>
                <input type="text" id='PID' name='PID' class="form-control" placeholder="PID">
              
                <label for='CUSID' class="control-label">CUSID</label>
                <input type="text" id='CUSID' name='CUSID' class="form-control" placeholder="CUSID">
                
                <label for='DATE' class="control-label">DATE</label>
                <input type="text" id='DATE' name='DATE' class="form-control" placeholder="DATE"> 

                <label for='QUANTITY' class="control-label">Quantity</label>
                <input type="text" id='QUANTITY' name='QUANTITY' class="form-control" placeholder="QUANTITY">
           
                
                <label for='WID' class="control-label">WID</label>
                <input type="text" id='WID' name='WID' class="form-control" placeholder="WID">
   
 <br>

                </div>
             <br>
                <input type="submit" value="Submit">

            </form>
        
         </div>
         <style>
           .button {
    background-color:  rgb(13, 105, 224);
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  </style>
 
 </body>

</html>