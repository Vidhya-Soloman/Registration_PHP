<?php
$con=mysqli_connect('localhost','root','','login');
if($con)
{
//echo "connected to database";
}
?>

<html>
<head></head>
<body>
<form method="POST" action="delete.php">
<div style=background-color:#e8d290>
<h2 align="center"><i>Delete</h2></i><br></div>
Ktu id<select name="ktuid"><option>select</option>
<?php
$q="select * from marks";
$cq=mysqli_query($con,$q);
if(mysqli_num_rows($cq))
while($row=mysqli_fetch_assoc($cq))
{
echo "<option>".$row['ktuid']."</option>";
}
?>
<input type="submit" name="search" value="delete"></input><br><br>
</select>
</form>
</body>
</html>

<?php
if(isset($_POST['search']))
{
$ktuid=$_POST['ktuid'];
$s="delete from student where ktuid='$ktuid'";
$cs=mysqli_query($con,$s);
if($cs)
{
echo "Student deleted";
}
}
?>