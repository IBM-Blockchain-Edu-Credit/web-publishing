<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OPP TEST</title>

  <script src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
  <link href="css/fonts.css" rel="stylesheet" />
</head>
<?php
  require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
  $connect = DBConnect();
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
?>
<body>
 <center><br>
   <h1>hi, OPP!</h1>
   <?php
     $result = mysqli_query($connect, SELECT * FROM 'question' WHERE questnum = 1);
     echo "<h3>" . $row[1] . "</h3>";
     echo "<h3>" . $row[2] . "</h3>";
     echo "<h3>" . $row[3] . "</h3>";
     echo "<h3>" . $row[4] . "</h3>";
     echo "<h3>" . $row[5] . "</h3>";
   ?>
</body>
</html>
