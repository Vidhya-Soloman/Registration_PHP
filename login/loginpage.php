<html>
<head></head>
<body style=background-color:#d0deb8>
<form method="post" action="">
<div style=background-color:#859690>
<h1 align="center">LOGIN</h1></div>
<br><br>
<table border="1" align="center" cellpadding=20 bgcolor="#b0d4c8">
<tr><th>Name</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr><th>Email id:</th>
<td><input type="textbox" name="email"></input></td></tr>
<tr><th>Password</th>
<td><input type="password" name="password"></input></td></tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit" style=background-color:lightgreen>
<input type="reset" name="reset" style=background-color:skyblue>
</table>
<div align="center">
<br><br>
Not a member? <a href="frameset.php" >Login here</a></div>
</form>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
//echo "connected to database";
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$q="select * from student where name='$name' and email='$email' and password='$password'";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
{
Header("Location:frameset.php");
}
}
?>
