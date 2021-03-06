<?php
function makeconnection()
{
  $cn=mysqli_connect("localhost","root","","foodforall");
  if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  return $cn;
}
?>