<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bg.css">
<html>
    <head><title>Registered users</title></head>
    <body>
     <?php 
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select * from cust";
    $result=mysqli_query($conn,$a);
  if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
echo '<table border="3">';
while($row = mysqli_fetch_array($result, MYSQL_NUM))
{
    
              $email=$row[0];
              $name=$row[1];
              $surname=$row[2];
              $city=$row[3];
              $state=$row[4];
              $password=$row[5];
echo("<tr><td>$email</td><td>$password</td><td>$name</td><td>$surname</td><td>$city</td><td>$state</td></tr>");
}
echo '</table>';

?>          
            
      
        </body>
</html>