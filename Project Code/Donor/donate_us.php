<html lang="en">
  <head>
    <title>Donate Us</title>
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
  <h1 align="center">Donate us to give us the opportunity to grow more</h1><br><br><br>
<p align="center"><font size="5">For more informtion:</font><br>
   <font size="4">Bkash no: 017*******</font><br>
   <font size="4">Rocket no:017*******</font><br>
</p>
     <table width="100%" style="margin: 2 auto; border:3px solid;text-align:center">

      <tr><td><font size="5">Your name:</font></td>
      <td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="Please enter only character" >
      </td>
      </tr><br>
      <tr><td><font size="5">Mobile No:</font></td>
      <td><input type="number" name="t2"  required="required" title="Please enter your phone no which was used for transaction" >
      </td>
      </tr><br>
      <tr><td><font size="5">Amount:</font></td>
      <td><input type="number" name="t3"   title="Please enter the amount you donated" >
      </td>
      </tr><br>
      <tr><td><font size="5">Transaction ID:</font></td>
      <td><input type="text" name="t4"   title="Please enter the Transaction ID" >
      </td>
      </tr><br><br><br>
      <tr><td></td><td><input type="submit" value="Send Us" name="sbmt" style="border:0px; background: red; width:110px; height:30px; box-shadow:5px 5px 5px black; color:#ffffff; font-weight:bold; font-size:15px;"></td></tr></table><br>
</body>

</html>
<?php include 'DBconnection.php'; ?>
<?php include 'footer.php'; ?>

<?php
if(isset($_POST["sbmt"])) 
{
    $cn=makeconnection();

      $s="insert into donate_us(name,mobile,amount,t_id) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] ."')";
      
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