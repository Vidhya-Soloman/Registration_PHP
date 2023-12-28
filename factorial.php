<!--PHP-->
<!--FACTORIAL-->
<html>
<head><title>Factorial</title>
</head>
<body>
<form method="post" action="factorial.php">
Enter a number:<input type="textbox" name="number"></input><br><br>
<input type="submit" name="submit" value="Factorial"></input>
</form>
</body>
</html>


<?php 
if(isset($_POST['submit']))
{
$number=$_POST['number'];
$fact=1;
for($i=1;$i<=$number;$i++)
$fact=$fact*$i;
echo "Factorial is:".$fact;
}
?>
