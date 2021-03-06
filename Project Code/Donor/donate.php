<html lang="en">
  <head>
    <title>Donate Food</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark" style="background-color: #f05656 !important;">
  <a class="navbar-brand" href="index.php" style="color: #1a1919"><h1>Food For All</h1></a>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="view_req.php" style="color: #1b0252">View Request&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="donate.php" style="color: #1b0252">Donate Food&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="view_donation.php" style="color: #1b0252">View Donation&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="logout.php" style="color: #1b0252">Logout&ensp;<span class="sr-only">(current)</span></a></li>
        <a class="nav-link" href="donate_us.php" style="color: #0A122A">Donate Us&ensp;<span class="sr-only">(current)</span></a></li>
      </ul>
  </nav>
</head>
<body>
  <div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 700px; background-color:#c6f4f5;">
      <div class="content"><br>

    <center><img src="Image/11.png" height="240px" width="1250" style="margin-bottom:10px" /></a></center>

    <table width="100%" style="margin: 2 auto; border:3px solid;text-align:center">

    <tr><td class="lefttd"><h6>Your Name:</h6></td><td><input type="text" name="t1" required="required" title="Please enter your name"/></td></tr><br>
    <tr><td class="lefttd"><h6>Mobile no:</h6></td><td><input type="number" name="t2" required="required" pattern="[0-9]{10,11}" title="Please youe valied mobile no"/></td></tr><br>
    <tr><td class="lefttd"><h6>Email:</h6></td><td><input type="email" name="t3" required="required" title="Please enter your email address"/></td></tr><br>
    <tr><td class="lefttd"><h6>Request ID:</h6></td><td><input type="number" name="t4" required="required" title="Please enter request id whom you want to donate"/></td></tr><br>
    <tr><td class="lefttd"><h6>Food Quantity(In Kg):</h6></td><td><input type="number" name="t5" required="required" pattern="[0-9]{1,2}" title="Please enter a amount of food you want"/></td></tr><br><br>

    <tr><td></td><td><input type="submit" value="Submit" name="sbmt" style="border:0px; background: blue; width:125px; height:40px; box-shadow:5px 5px 10px black; color:black; font-weight:bold; font-size:20px;"></td></tr></table>

    <p align="center"><font size="6">Submit to set up the picup point in map.</font><br></p><br><br>

<?php include 'DBconnection.php'; ?>

<?php
if(isset($_POST["sbmt"])) 
{
    $cn=makeconnection();

      $s="insert into donated(name,mobile,email,req_id,amount) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] ."')";
      
  $q=mysqli_query($cn,$s);
  mysqli_close($cn);
  if($q>0)
  {
  echo "<script>location.replace('user_map.php');</script>";
  }
  else
  {echo "<script>alert('Sending request Failed');</script>";
  }
    
    } 

?>
<?php include 'footer.php'; ?>
</body>
</html>
