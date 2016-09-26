<?php
echo "<link rel='stylesheet' type='text/css' href='myStyle.css'/>";
echo"<title>Result</title>";
if(isset($_POST['submit1']))
{
$string =$_POST["num1"];
for($i = 0; $i != strlen($string); $i++)
{
     $asciiString .=ord($string[$i]).";";
     $asciiString1 +=ord($string[$i]);
}
$asciiCode1 = str_replace("&", "&amp;", $asciiString1);
echo "<br><h1>The ASCII code of the Symbol you entered is:&nbsp$asciiCode1</h1>";
$asciiCode = str_replace("&", "&amp;", $asciiString);
echo "<br><h4>The ASCII code of each Character in your String is:&nbsp$asciiCode</h4>";
echo"<a href='index.html'>Go back and check for other symbols?</a>";
}
?>
