<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <header>
     <div class="topnav">
    <a href="./home.php" class="button">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Menu 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="./display_company.php"> COMPANY</a>
     <a href="./display_customer.php"> CUSTOMER</a>
     <a href="./display_warehouse.php"> WAREHOUSE</a>
     <a href="./display_fertilizer.php"> FERTILIZER</a>
     <a href="./display_purchaseddata.php"> PURCHASED DATA</a>
     <a href="./display_product.php">PRODUCTS</a>     
    </div>
  </div> 
  <!-- The overlay -->
        <div id="myNav" class="overlay">
            <link rel="stylesheet" type="text/css" href="css/style2.css">
  </header>
<div style="padding-left:16px">
    <h2><u>CUSTOMER</u></h2>
        <button  class='button button1' ><a href="add_customer.php">ADD</button></a>
            <br><br>
          <table>
             <tr>
                  <th>Customer ID</th>
                 <th>Customer Name</th>
                 <th>Phone</th>
                
                 <th>Update</th>
            </tr>
            <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
 
 background-color: rgb(221, 221, 221);
   color: rgb(13, 105, 224);
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f9f9f9;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content a {
 float: none;
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
 text-align: left;
}

.dropdown-content a:hover {
 background-color: #ddd;
}

.dropdown:hover .dropdown-content {
 display: block;
}

.button {
  background-color:  rgb(11, 137, 221);
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
.button0 {
    background-color: rgb(215, 228, 233);
    border: none;
    color: white;
    padding: 6px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }

  .button1 {
  background-color: rgb(11, 137, 221); 
  color: white; 
  border: 2px solid;
}

.button:hover {
    background-color:rgb(247, 247, 247);
    color: rgb(13, 105, 224);
  }

</style>
  <?php
  include "config.php";

  $sql= "Select * from `customer`;";

  $result= mysqli_query($connect,$sql);

  if($result){
      while($row=mysqli_fetch_assoc($result))
      {
        $CusID=$row['CUSID'];
        $CusNAME=$row['CUSNAME'];
        $Phone=$row['PHONE'];
       
        
        echo '<tr>
        <td>'.$CusID.'</td>
        <td>'.$CusNAME.'</td>
        <td>'.$Phone.'</td>
       
        
        <td>
                <button class="button0" ><a href="update_customer.php?cusid='.$CusID.'">Update</a></button>
               
    </td>
    </tr>';

      }
    }   
  ?>
</table>
</div>
</body>
</html>
