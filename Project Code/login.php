<!doctype html>
<html lang="en">
  <head>
    <title>Log In</title>
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
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 600px;">
      <div class="content">
        <br><br><br>
      <img src="Image/img8.jpg" height="300px" width="1250px" style="margin-bottom:10px"></a>
      <br><br>
      <table width="100%" style="margin: 0 auto; border:3px solid;text-align:center">
      <tr><td class="lefttd"><h3>E-Mail:</h3></td><td><input type="email" name="t1" required="required" title="Please enter your email"/></td></tr>
      <tr><td class="lefttd"><h3>Password:</h3></td><td><input type="password"name="t2"  required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>

      <tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:#2D7FDE; width:125px; height:40px;  box-shadow:2px 2px 10px black; color:#E2ECF8; font-weight:bold; font-size:20px;"></td></tr><br>

        <h4 align="center">&nbsp;&nbsp;Not a donor?<a href="donor_reg.php" style="color:red">&nbsp;Click here</a>&nbsp;to register.</h4>
        <br><br><br>

</nav>
</body>
</body>
<?php include 'footer.php' ?>
</html>

<?php include 'DBconnection.php'; ?>

<?php

$_SESSION['donorstatus']="";

if(isset($_POST["sbmt"])) 
{
    $cn=makeconnection();			

			$s="select *from donorregistration where email='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["email"]=$_POST["t1"];
       $_SESSION['donorstatus']="yes";

        echo "<script>location.replace('Donor/index.php');</script>"; //This will take to the donor/index page
	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
	}
		
}	
?>
// This part is taken from www.w3school.com & stackoverflow