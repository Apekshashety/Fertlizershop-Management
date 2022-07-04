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
if(isset($_POST['CID'])){
    $CID=$_POST['CID'];
    $FID=$_POST['FID'];
    $PRICE=$_POST['PRICE'];
    $sql= "INSERT INTO `product` (`CID`,`FID`,`PRICE`) VALUES ('$CID','$FID','$PRICE')";
    $result=mysqli_query($connect,$sql);
    if($result){

       header("Location:display_product.php");
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
    <a href="./display_product.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT PRODUCT</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">
                     <div class="row">
            
                <label for='CID' class="control-label">CID</label>
                <input type="text" id='CID' name='CID' class="form-control" placeholder="CID"> 

               
                <label for='FID' class="control-label">FID</label>
                <input type="text" id='FID' name='FID' class="form-control" placeholder="FID"> 

                
                <label for='PRICE' class="control-label">Price</label>
                <input type="text" id='PRICE' name='PRICE' class="form-control" placeholder="Price">  
                
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