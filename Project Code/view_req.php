<!doctype html>
<html lang="en">
  <head>
    <title>View Request</title>
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

  <?php include 'DBconnection.php'; ?>

  </nav>

  <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
   <tr><td colspan="7" align="center"></td></tr> // Taken help from www.w3school.com//

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:#01DFD7" align="center" class="bold">            
             <td class="bold" align="center" style="color:#B40404">ID</td><td align="center" style="color:#B40404">Name</td><td align="center"style="color:#B40404">Mobile</td><td align="center" style="color:#B40404">Email</td><td align="center" style="color:#B40404">Location</td><td align="center" style="color:#B40404">Quantity</td>
        </tr>
<?php

$cn=mysqli_connect("localhost","root","","foodforall");
$s="select * from requests";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  
  while($data=mysqli_fetch_array($result))
  {
        echo"<tr><td align='center' style='color:#380B61'>$data[0]</td><td align='center' style='color:#380B61'>$data[1]</td><td align='center' style='color:#380B61'>$data[2]</td><td align='center' style='color:#380B61'>$data[3]</td><td align='center' style='color:#380B61'>$data[4]</td><td align='center' style='color:#380B61'>$data[5]</td></tr>";
      }
      mysqli_close($cn);
      ?>


      </table>
    </nav>
  </body>
</body>
<?php include 'footer.php'; ?>


</html>        