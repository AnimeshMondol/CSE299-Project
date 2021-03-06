<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body style="width: 1500px; height: 60px;">

    <body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Food For All</a>
   
<div style="height:00px;">
     <form method="post" enctype="multipart/form-data" style="width: 1519px; height: 600px;">
      <div class="content">
      	<table width="100%" style="margin: 0 auto; border:3px solid;text-align:center">
        <br>
        <br>
      <h1 align="center"><span class="bold">Contact Us</span></h1>
      <img src="Image/img7.jpg" height="400px" width="1250px" style="margin-bottom:10px"></a>
      <br><br><br>
      <tr><td><font size="5">Your name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      <td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="Please enter only character" >
      </td>
      </tr><br><br>
      <tr><td><font size="5">Email Address:</font></td>
      <td><input type="email" name="t2"  required="required" title="Please enter valid email" >
      </td>
      </tr><br><br>
      <tr><td><font size="5">Mobile No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
      <td><input type="number" name="t3"  pattern="[0-9]{10,11}" title="Please enter valid phone no" >
      </td>
      </tr><br><br>
      <tr><td class="lefttd"  style="vertical-align:middle"><font size="5">Subject:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><textarea name="t4"></textarea></td></tr><br><br>

<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>
<br><br><br><br>
<p><font size="5">For more informtion:</font><br>
   <font size="4">Call us: 017*******</font><br>
   <font size="4">Email us:foodforall@*****.com</font><br>
   <font size="4">Facebook page: www.facebook.com/foodforall</font><br>
 
</p>
     <br><br><br><br>

</div>
</form>
</div>
</nav>
</body>
</body>
<?php include 'footer.php'; ?>
</html>

<?php include 'DBconnection.php'; ?>

<?php
if(isset($_POST["sbmt"]))
{
  $cn=makeconnection();

     $s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')"; 
      
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

