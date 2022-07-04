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
if(isset($_POST['FNAME'])){
    
    $FNAME=$_POST['FNAME'];
    $TYPE=$_POST['TYPE'];
    $sql= "INSERT INTO `fertilizer` (`FNAME`,`TYPE`) VALUES ('$FNAME','$TYPE')";
    $result=mysqli_query($connect,$sql);
    if($result){

        header("Location:display_fertilizer.php");
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
    <a href="./display_fertilizer.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>


            <div class='modal fade' id='addNewCustModal' role="dialog" data-backdrop="static">
               
                    <h4 class="text-center"><u>INSERT COMPANY</u></h4>
             </div>
             <div class="modal-body">
                 <form  method="post">
                     <div class="row">
                   
                <label for='FNAME' class="control-label">Fertilizer Name</label>
                <input type="text" id='FNAME' name='FNAME' class="form-control" placeholder="FName" autocomplete="off">

   
                <label for='TYPE' class="control-label">Type</label>
                <input type="text" id='TYPE' name='TYPE' class="form-control" placeholder="Type">
                
   
              
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