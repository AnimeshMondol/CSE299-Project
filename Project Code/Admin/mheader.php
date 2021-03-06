<!DOCTYPE html>
<html>
<head>
    <title>Donor Map</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
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
<style>

    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #map {
        height: 100%;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>