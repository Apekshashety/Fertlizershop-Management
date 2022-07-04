<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style1.css">
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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

  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>

<!-- Navigation -->
<div class="topnav">
  
  <a href="./home.php" class="w3-button w3-bar-item">Home</a>
  
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
  
  <a href="./about.php"target="_blank" class="w3-button w3-bar-item">About</a>
  <a href="./index.php" class="w3-button w3-bar-item">Quit</a>
  
 
</div>
<br><br><br>

  <div style="padding-left:16px"></div>
  <h1>WELCOME TO SMART-RETAILER</h1> 
  <img src="SMART RETAILER.jpg" alt="Logo" style="width:20%;">


</body>
</html>
