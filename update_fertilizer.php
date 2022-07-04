<?php

include 'config.php';
$fid=$_GET['fid'];
$sql="Select * from `fertilizer` where fid=$fid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
    $FID=$row['FID'];
        $FNAME=$row['FNAME'];
        $TYPE=$row['TYPE'];
if(isset($_POST['submit'])){
    $FID=$_GET['fid'];
    
    $FNAME=$_POST['FName'];
    $TYPE=$_POST['Type'];
    $sql="UPDATE `fertilizer` SET `FNAME` = '$FNAME',`TYPE`='$TYPE' WHERE `FID` = $FID";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo"<script>alert('updated successfully');</script>";
        header("Location:display_fertilizer.php");
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
    <a href="./display_fertilizer.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE FERTILIZER</u></h4>

    <form  method="post">
        <div class="row">
           
            
        
                <label for='FName' class="control-label">Fertilizer name</label>
                <input type="text" id='FName' name='FName' class="form-control" placeholder="FName"
                value=<?php echo $FNAME;?>>
              
                <label for='Type' class="control-label">Type</label>
                <input type="text" id='Type' name='Type' class="form-control" placeholder="Type"
                value=<?php echo $TYPE;?>>
   
        
                <br><br>

                <input type="submit" name="submit" value="Submit">  
    
 
    </form>                               


    </body>
</html>