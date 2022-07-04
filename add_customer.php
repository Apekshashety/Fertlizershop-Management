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
if(isset($_POST['CUSNAME'])){
    
    $CUSNAME=$_POST['CUSNAME'];
    $PHONE=$_POST['PHONE'];
    
    $sql= "INSERT INTO `customer` (`CUSNAME`,`PHONE`) VALUES ('$CUSNAME','$PHONE')";
    $result=mysqli_query($connect,$sql);
    if($result){

        header("Location:display_customer.php");
        echo "<script>alert('Data inserted successfully!!')</script>";
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
    <a href="./display_customer.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT CUSTOMER</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">
                     <div class="row">
                    
               
        
                <label for='CUSNAME' class="control-label">Customer Name</label>
                <input type="text" id='CUSNAME' name='CUSNAME' class="form-control" placeholder="CUSNAME" autocomplete="off">
              
                <label for='PHONE' class="control-label">PHONE</label>
                <input type="tel" id='PHONE' name='PHONE' class="form-control" 
                pattern="[1-9]{1}[0-9]{9}"placeholder="PHONE" autocomplete="off">
   
               
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