<?php
$validate=false;
$email2="";
$password2="";
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$validor=false;
if($email==="crazy4@gmail.com")
       {
    if($password==="mangalore")
    $validor=true;
       }
if($validor)
       {
    header("Location: dashboard.php");
    die("error");
       }
$password1= hash("sha512",$_REQUEST["password"]);
echo "$password1";
$conn=mysqli_connect("localhost","root","","tg");
$a="select * from cust where email='".$email."'";
$result=  mysqli_query($conn, $a);
while($row = mysqli_fetch_array($result, MYSQL_NUM))
           {    echo 'hey';
    
            $email2=$row[0];
            $password2=hash("sha512",$row[1]);
            echo "$password2";
            if($email2===$_REQUEST["email"])
            {
              if($password2===$password1)
                $validate=TRUE;
            }   
        }
 /*   if(!$validate)
       { 
    header("Location: login.html");
    die("error");
       }
else
{
    header("Location: cust.php");
    die("error");
}*/
?>