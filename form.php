<html>
<head>
<title>login</title>
</head>
<body>
<form method="post" action="form.php">
<table border='1'>
<tr><th>Name</th>
<td><input type="textbox" name="name"></input><br></td></tr>
<tr><th>Email</th>
<td><input type="textbox" name="email"</input></td></tr>
<tr><td><input type="submit" name="submit" value="submit"></td>
<td><input type="reset" name="reset"></td></tr>
</form>
</table>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];  
$email=$_POST['email'];
echo "<table border='1'><tr>";
echo "<td>".$name."</td>";
echo "<td>". $email."</td>";
echo "</table>";
}
?>
