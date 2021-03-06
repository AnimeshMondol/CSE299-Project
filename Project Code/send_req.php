<!doctype html>
<html lang="en">
  <head>
    <title>Send Request for food</title>
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
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 650px;">
      <div class="content">
        <br><br>
        
  <img src="Image/10.png" height="300px" width="1250px" style="margin-bottom:3px"></a>

    <table width="100%" style="margin: 0 auto; border:3px solid;text-align:center">
    <tr><td class="lefttd"><h6>Your Name:</h6></td><td><input type="text" name="t1" required="required" title="Please enter your name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Mobile no:</h6></td><td><input type="number" name="t2" required="required" pattern="[0-9]{10,11}" title="Please youe valied mobile no"/></td></tr><br>
    <tr><td class="lefttd"><h6>Email:</h6></td><td><input type="email" name="t3" required="required" title="Please enter your email address"/></td></tr><br>
    <tr><td class="lefttd"><h6>Location you want:</h6></td><td><input type="text" name="t4" required="required" title="Please enter your location."/></td></tr><br>
    <tr><td class="lefttd"><h6>Food Quantity(In Kg):</h6></td><td><input type="number" name="t5" required="required" pattern="[0-9]{1,2}" title="Please enter a amount of food you want"/></td></tr><br><br>

    <tr><td>&nbsp;</td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background: blue; width:125px; height:40px; box-shadow:5px 5px 10px black; color:black; font-weight:bold; font-size:20px;"></td></tr></table><br><br><br><br><br><br>
</div>
</form>
</div>
</nav>
</body>
</body>

<?php include 'footer.php'; ?>

<?php include 'DBconnection.php'; ?>

<?php
if(isset($_POST["sbmt"]))
{
    $cn=makeconnection();
     $s="insert into requests(name,mobile,email,location,quantity) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] ."')";
     //this will insert values to DB

  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>alert('Request send');</script>";
  }
  else
  {echo "<script>alert('Sending request Failed');</script>";
  }
}
?>

</html>      