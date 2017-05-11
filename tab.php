<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bg.css">
<html>
    <head><title>TAB</title></head>
    <body>
        <img src="tab.jpg" border="3"><br><BR>
        <?php 
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select * from prod where name='GALAXY TAB'";
    $result=mysqli_query($conn,$a);
  if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
echo '<table border="3">';
while($row = mysqli_fetch_array($result, MYSQL_NUM))
{
    
              $name=$row[0];
              $no=$row[1];
              $company=$row[2];
              $spex=$row[3];
              $price=$row[4];
              echo("<tr><td>MODEL NAME:</td><td>$name</td></tr><tr><td>PRODUCT NUMBER:</td><td>$no</td></tr><tr><td>COMPANY:</td><td>$company</td></tr><tr><td>TECHNICAL SPECIFICATIONS:</td><td>$spex</td></tr><tr><td>PRICE(INR)</td><td>$price</td></tr></table><br>");
}    
mysqli_free_result($result);
?>

        </body>
</html>