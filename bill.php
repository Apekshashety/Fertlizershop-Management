<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
     <div class="topnav">
    <a href="./display_purchaseddata.php" class="button">Back</a>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</div>
<header>
<style>
    .container {
  position: absolute;
  left:38%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color:rgb(11, 137, 221);
}

/* Full-width input fields */
div {
  width: 90%;
  padding: 15px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
form .container{
    background-color:#ba817d;
}

h2 {text-align: center;}

.topnav {
  overflow: hidden;
  background-color: rgb(11, 137, 221);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 10px;
  text-decoration: none;
  font-size: 18px;
}
.topnav a:hover {
  background-color: rgb(221, 221, 221);
  color: rgb(13, 105, 224);
}
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

<?php
session_start();
include 'config.php';

$SID = $_GET['sid'];
$sql = "SELECT * FROM purchased_data,customer,product,fertilizer WHERE purchased_data.SID = $SID 
   AND purchased_data.CUSID = customer.CUSID AND purchased_data.PID = product.PID AND product.FID=fertilizer.FID ";
$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){
  $FNAME = $row["FNAME"];
  $CUSNAME = $row["CUSNAME"];
  $DATE = $row["DATE"];
  $QUANTITY = $row["QUANTITY"];
  $AMOUNT = $row["AMOUNT"];
}
?>
    <title>Receipt</title>
</head>
<body>

<h2>Bill Generated!</h2>
<div class="container">
  <form action="bill.php" class="contain">
  
  <h3>Receipt</h3>

    <div><b>Customer name:</b><?php echo "$CUSNAME"; ?></div>
    <div><b>Fertilizer name:</b><?php echo "$FNAME"; ?></div>
    <div><b>Date:</b><?php echo "$DATE"; ?></div>
   	<div><b>Quantity(g) :</b><?php echo "$QUANTITY"; ?></div>
    <div><b>Total Amount :</b><?php echo "$AMOUNT"; ?></div>
  </form>
  <button type="" onclick="window.print()"  class="btn">Print</button>
</div>
</body>
</html>