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
if(isset($_POST['AVAILABLESTOCK'])){
    
    $AVAILABLESTOCK=$_POST['AVAILABLESTOCK'];
    $SOLDOUTSTOCK=$_POST['SOLDOUTSTOCK'];
    $sql= "INSERT INTO `warehouse` (`AVAILABLESTOCK`,`SOLDOUTSTOCK`) VALUES ('$AVAILABLESTOCK','$SOLDOUTSTOCK')";
    $result=mysqli_query($connect,$sql);
    if($result){

       header("Location:display_warehouse.php");
        die;

    }
    else
    {
        echo "not inserted";
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
    <a href="./display_warehouse.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT WAREHOUSE</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">
                 <div class="row">
                     
                <label for='AVAILABLESTOCK' class="control-label">Available stock</label>
                <input type="text" id='AVAILABLESTOCK' name='AVAILABLESTOCK' class="form-control" placeholder="AVAILABLESTOCK">
              
            
                <label for='SOLDOUTSTOCK' class="control-label">Soldout stock</label>
                <input type="text" id='SOLDOUTSTOCK' name='SOLDOUTSTOCK' class="form-control" placeholder="SOLDOUTSTOCK">  <br>

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