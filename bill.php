<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="bg.css">
<html>
    <script type="text/javascript">
function printpage()
  {
  window.print()
  }
  </script>
    <head><title>Bill</title></head>
    <body>
        <img src="funtoo.jpg">
     <br>PRINT THIS INVOICE OF TRANSACTION:<input type="button" value="print" onclick="printpage()">
    
    <br>
    <?php
    $there=false;
 $email=$_REQUEST["email"];
  $first=$_REQUEST["first_name"];
  $last=$_REQUEST["last_name"];
  $city=$_REQUEST["city"];
  $state=$_REQUEST["state"];
  $phone=$_REQUEST["phone"];
  $mode=$_REQUEST["cod"];
  echo("<table border=0><tr><td>NAME:</td><td>$first</td></tr><tr><td>SURNAME:</td><td>$last</td></tr><tr><td>CITY:</td><td>$city</td></tr><tr><td>STATE:</td><td>$state</td></tr><tr><td>EMAIL ADDRESS:</td><td>$email</td></tr><tr><td>PHONE SELECTED:</td><td>$phone</td></tr><tr><td>MODE OF PAYMENT:</td><td>$mode</td></tr><tr><td>PHONE DETAILS:</td></tr></table>");
    $conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select * from prod where name='$phone'";
    $result=mysqli_query($conn,$a);
  if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
echo '<table border="3">';
while($row = mysqli_fetch_array($result, MYSQL_NUM))
{
 $there=true;   
              $name=$row[0];
              $no=$row[1];
              $company=$row[2];
              $spex=$row[3];
              $price=$row[4];
              echo("<tr><td>MODEL NAME:</td><td>$name</td></tr><tr><td>PRODUCT NUMBER:</td><td>$no</td></tr><tr><td>COMPANY:</td><td>$company</td></tr><tr><td>TECHNICAL SPECIFICATIONS:</td><td>$spex</td></tr><tr><td>PRICE(INR)</td><td>$price</td></tr></table><br>");

              $a="INSERT INTO orders"." VALUES('$email','$phone')";
    $mysqli_query = mysqli_query($conn,$a);
    if(!$result)
    {
    die('error occured');
    }
    mysqli_close($conn);

}    
mysqli_free_result($result);
?>
        </body>
</html>