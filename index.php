<?php
$host="localhost";
$user = "root";
$pwd = "";
$db = "fertilizer";

$conn = mysqli_connect($host,$user,$pwd,$db);

if(!$conn)
{
    echo "DB not connected.";
}
if(isset($_POST['submit']))
{
$user = $_POST['Uname'];
$pass = $_POST['Pass'];

$sql="SELECT * FROM `login` WHERE  `USERNAME`='$user' and `PASSWORD`='$pass';";
 $result=mysqli_query($conn,$sql);
 $check=mysqli_fetch_array($result);
if(isset($check))
{
    header('Location:home.php');
}
else{
    echo "<script>alert('Incorrect username or password')</script>";
}


}
?>


<!DOCTYPE html>    
<html> 
 
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">   
    
</head>
<style>
body {
  background-image: url('fertibg1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body>    
    <h2>USER LOGIN</h2><br>    
    <div class="login">    
    <form id="login" method="post">    
    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" required name="Uname" id="Uname" placeholder="Username" autocomplete="off">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" required name="Pass" id="Pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>    
        <br><br> <br>  
        <input type="submit" value="Submit" name="submit">
        
    </form>     
    </div> 

</body>  


</html>