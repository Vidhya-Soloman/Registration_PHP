<html>
<head>
<title>student registration</title>
</head>
<body>
<form method="post" action="">
<div style=background-color:#e8d290>
<h2 align="center"><i>STUDENT REGISTRATION</i></h2><br>
</div><br><br>
<table border="1" align="center">
<tr>
<th>Name</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr>
<th>Email id</th>
<td><input type="textbox" name="email"></input></td></tr>
<tr><th>Phone No</th>
<td><input type="textbox" name="phone"></input></td></tr>
<tr><th>Password</th>
<td><input type="password" name="password"></input></td></tr>
<tr><th>Re-type Password</th>
<td><input type="password" name="repassword"></input></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit" style=background-color:lightgreen></input>
<input type="reset" name="reset" style=background-color:skyblue></input></td></tr>
</body>
</html>


<!--php code-->

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','login');
if($con)
{
echo "connected to database";
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$q="insert into student values('$name','$email','$phone','$password','$repassword')";
$cq=mysqli_query($con,$q);
if($cq)
{ 
//echo "1 row inserted successfully";
Header("location:success.php");
}
}
?>