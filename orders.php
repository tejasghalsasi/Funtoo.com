<link rel="stylesheet" type="text/css" href="bg.css">
<!DOCTYPE html>
<html>
    <head><title>Current Orders</title></head>
    <body>
    <?php 
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select * from orders";
    $result=mysqli_query($conn,$a);
  if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
echo '<table border="3">';
while($row = mysqli_fetch_array($result, MYSQL_NUM))
{
    
              $email=$row[0];
              $prodname=$row[1];
echo("<tr><td>$email</td><td>$prodname</td></tr>");
}
echo '</table>';

?>           
    </body>
</html>