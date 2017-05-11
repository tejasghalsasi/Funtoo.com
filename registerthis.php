<?php
   $email=$_REQUEST["email"];
 $first=$_REQUEST["first_name"];
  $last=$_REQUEST["last_name"];
  $city=$_REQUEST["city"];
  $state=$_REQUEST["state"];
  $password= hash("sha512",$_REQUEST["password"]);
  

  $conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    
    $a="INSERT INTO cust"." VALUES('$email','$first','$last','$city','$state','$password')";
    $result=  mysqli_query($conn,$a);
    if(!$result)
    {
    die('error occured');
    }
    mysqli_close($conn);
?>
<html><head><title>Thank you for Registering</title></head>
    <link rel="stylesheet" type="text/css" href="bg.css">
    <body>
<h1>Thank u for Registering with us</h1><br><a href="index.php">Return home</a>
</body>
</html>