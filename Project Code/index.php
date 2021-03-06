<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
.bg-image {
  height: 800%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.img1 { background-image: url("Image/img3.jpg"); }
.img2 { background-image: url("Image/img4.jpg"); }
.img3 { background-image: url("Image/img5.jpg"); }
.img4 { background-image: url("Image/img6.jpg"); }

.bg-text {
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0, 0.4); 
  color: white;
  font-weight: bold;
  font-size: 50px;
  border: 5px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}/* This portion is collected from www.w3school.com */
</style>
</head>
<body>

<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>

<div class="bg-text">Welcome to Food For All</div>

</body>
<?php include 'footer.php'; ?>
</html>
