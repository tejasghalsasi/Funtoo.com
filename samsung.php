<link rel="stylesheet" type="text/css" href="bg.css">
<!DOCTYPE html>
<html>
    <head><title>Samsung</title></head>
    <body>
          <?php 
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select * from prod where company='samsung'";
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
              echo("<tr><td>MODEL NAME:</td><td>$name</td></tr><tr><td>PRODUCT NUMBER:</td><td>$no</td></tr><tr><td>COMPANY:</td><td>$company</td></tr><tr><td>TECHNICAL SPECIFICATIONS:</td><td>$spex</td></tr><tr><td>PRICE(INR)</td><td>$price</td></tr><tr><td colspan=10><br></td></tr>");
}
echo '</table>';
mysqli_free_result($result);
?>

        
        
    </body>
</html>