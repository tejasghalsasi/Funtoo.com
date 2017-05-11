<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    
    <body background="disco.jpg"><pre><i>
 <a href="nokia.php"target="_blank"><font color="yellow">Nokia</font></a>
<hr>  
<a href="samsung.php"target="_blank"><font color="yellow">Samsung</font></a>
<hr>  
<a href="search.html"target="_blank"><font color="yellow">Search a Phone</font></a>
<hr>  
<a href="contactus.html"target="_blank"><font color="yellow">Contact Us</font></a>
<hr>
<A HREF="aboutus.html"target="_blank"><font color="yellow">About Us</font></A><hr>
</i>
<?php
$hits=0;
$conn=mysqli_connect("localhost","root","","tg");
    if(!$conn)
    {
    die('error occured');
    }
    $a="select hits from hitcounter;";
    $result=mysqli_query($conn,$a);
  if(! $result )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysqli_fetch_array($result, MYSQL_NUM))
{
    $hits=$hits+1;
}    
echo '<font color="yellow">';    
echo "TOTAL HITS :{$hits}";
echo '</font>';
$hits+=1;
mysqli_free_result($result);
    $a="INSERT INTO hitcounter"." VALUES('$hits')";
    $result2=  mysqli_query($conn,$a);
    if(!$result2)
    {
    die('error occured');
    }
    mysqli_close($conn);
?>
<hr>
</body>
</html>