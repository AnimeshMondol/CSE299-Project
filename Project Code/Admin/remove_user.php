<?php include 'header.php'; ?>
<?php include('DBconnection.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from donorregistration where f_name='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}
?>
<form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww">
<tr><td colspan="2" align="center" class="toptd" font="8">DELETE USER</td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select Name</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from donorregistration";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
			echo "<option value=$data[1]>$data[1]</option>";	
	}
	mysqli_close($cn);
?>
</select>

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from users where f_name='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	$data=mysqli_fetch_array($result);
	$donor_id=$data[0];
	$f_name=$data[1];
	$m_name=$data[2];
	$l_name=$data[3];
	$mobile=$data[4];
	$address=$data[5];
	$email=$data[6];
	$pwd=$data[7];	
	mysqli_close($cn);
}
?>

</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"></td></tr>
</table>
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>
</body>
</html>
// Taken help from w3school.com (Remove data from mysql DB)