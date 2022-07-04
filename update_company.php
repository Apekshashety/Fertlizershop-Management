<?php

include 'config.php';
$cid=$_GET['cid'];
$sql="Select * from `company` where cid=$cid";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$CID=$row['CID'];
$CNAME=$row['CNAME'];
$LOCATION=$row['LOCATION'];

if(isset($_POST['submit'])){
    $CID=$_GET['cid'];
    
    $CNAME=$_POST['CompanyName'];
    $LOCATION=$_POST['Location'];
    $sql="UPDATE `company` SET `CNAME` = '$CNAME',`LOCATION`='$LOCATION' WHERE `CID` = $CID";
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "<script>alert('updated successfully');</script>";
        header("Location:display_company.php");
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
    <a href="./display_company.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>

<h4 class="text-center"><u>UPDATE COMPANY</u></h4>

    <form  method="post">
        <div class="row">
           
            
        
                <label for='CompanyName' class="control-label">Comapany name</label>
                <input type="text" id='CompanyName' name='CompanyName' class="form-control" placeholder="CompanyName"
                value=<?php echo $CNAME;?>>
   
                <label for='Location' class="control-label">Location</label>
                <input type="text" id='Location' name='Location' class="form-control" placeholder="Location"
                value=<?php echo $LOCATION;?>>  <br><br>

                <input type="submit" name="submit" value="Submit">  
    
 
    </form>                               


    </body>
</html>