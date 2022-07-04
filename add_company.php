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
if(isset($_POST['CompanyName'])){
    
    $CompanyName=$_POST['CompanyName'];
    $Review=$_POST['Review'];
    $Location=$_POST['Location'];
    $sql= "INSERT INTO `company` (`CNAME`,`LOCATION`) VALUES ('$CompanyName','$Location')";
    $result=mysqli_query($connect,$sql);
    if($result){

        header("Location:display_company.php");
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
    <a href="./display_company.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT COMPANY</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">
                     <div class="row">
                    
               
        
                <label for='CompanyName' class="control-label">Comapany Name</label>
                <input type="text" id='CompanyName' name='CompanyName' class="form-control" placeholder="CompanyName" autocomplete="off">
              
   
                <label for='Location' class="control-label">Location</label>
                <input type="text" id='Location' name='Location' class="form-control" placeholder="Location" autocomplete="off">  <br>

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