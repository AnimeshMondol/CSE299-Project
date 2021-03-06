<!doctype html>
<html lang="en">
  <head>
    <title>Became a Donor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body style="
    width: 1500px;
    height: 70px;
">
 <body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Food For All</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div style="height:00px;">
 <from method="post" entype="multipart/from-data" style="width: 1519px; height: 700px;">
  <div class="content">
  <br><br><br>
  <img src="Image/img9.jpg" height="300px" width="1250px" style="margin-bottom:10px"></a>
  <br>
  <table width="100%" style="margin: 0 auto; border:3px solid;text-align:center">

    <tr><td class="lefttd"><h6>First Name:</h6></td><td><input type="text" name="t1" required="required" title="Please enter your first name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Middle Name:</h6></td><td><input type="text" name="t2" required="required" title="Please enter your Middle name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Last name:</h6></td><td><input type="text" name="t3" required="required" title="Please enter your last name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Mobile no:</h6></td><td><input type="number" name="t4" required="required" pattern="[0-9]{10,11}" title="Please youe valied mobile no"/></td></tr><br>
    <tr><td class="lefttd"><h6>Address:</h6></td><td><input type="text" name="t5" required="required" title="Please enter your address"/></td></tr><br>
    <tr><td class="lefttd"><h6>Email:</h6></td><td><input type="email" name="t6" required="required" title="Please enter your email address"/></td></tr><br>
    <tr><td class="lefttd"><h6>Password:</h6></td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9]{5,15}" title="Please enter a password in the range of 5-15 to make it strong"/></td></tr><br>
    <tr><td class="lefttd"><h6>Confirm Password:</h6></td><td><input type="password" name="t7" required="required" pattern="[a-zA-Z0-9]{5,15}" title="Confirm it again" /></td></tr><br><br>

    <tr><td>&nbsp;</td><td><input type="submit" value="Sign Up" name="sbmt" style="border:0px; background: red; width:125px; height:40px; box-shadow:5px 5px 10px black; color:white; font-weight:bold; font-size:20px;"></td></tr></table><br><br><br><br><br><br>


  </div>
 </nav>
</body>
</body>
<?php include 'footer.php' ?>
</html>
<?php include 'DBconnection.php'; ?>

<?php
{
	$cn=makeconnection();
		$s="insert into donorregistration(f_name,m_name,l_name,mobile,address,email,pwd) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] . "','" . $_POST["t8"]   ."')";
		//insert the inputs to the donorregistration in DB
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
  {
  echo "<script>alert('Record is Saved');</script>";
  }
  else
  {echo "<script>alert('Saving Record Failed');</script>";
  }	
}
?>
