<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OPP EDITING PAGE</title>

  <script src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
  <link href="css/fonts.css" rel="stylesheet" />
  <link href="css/card.css" rel="stylesheet" />
</head>
<?php
  //require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
  //$connect = DBConnect();
  $connect->query('set character set euckr;');
  $connect->query("set session character_set_connection=utf8;");
  $connect->query("set session character_set_results=utf8;");
  $connect->query("set session character_set_client=utf8;");
?>
<body style="background-color:#FFBB00">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <br>
    <div class="title">
         <h1 style="font-size:50px;text-align:left;color:white;font-weight:bold;">WRITING OPP :P</h1>
    </div>

   <div class="container">
        <menu>
          아래는 네가 한 것들!
        </menu><br>
   <div>
     <div class="button-1">
    <div class="eff-1"></div>
    <a href="index.php"> 되돌아가기 </a>
    </div>
     <div class="button-4">
       <div class="eff-4"></div>
       <a href="qna.php"> 다음 </a>
     </div>
   </div>
</div>
</body>
</html>
