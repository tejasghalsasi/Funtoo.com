<?php
   $email=$_REQUEST["email"];
 $first=$_REQUEST["first_name"];
  $last=$_REQUEST["last_name"];
  $city=$_REQUEST["city"];
  $state=$_REQUEST["state"];
  $comments=$_REQUEST["comments"];
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    
    $a="INSERT INTO feedback"." VALUES('$email','$first','$last','$city','$state','$comments')";
    $result=  mysqli_query($conn,$a);
    if(!$result)
    {
    die('error occured');
    }
    mysqli_close($conn);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bg.css">
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>thank u</title>
    </head>
    <body>
        <h1>Thank u for your valuable feedback</h1><br><a href="index.php">Return home</a>
    </body>
</html>