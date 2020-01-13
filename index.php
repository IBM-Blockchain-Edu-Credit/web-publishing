<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OPP TEST</title>

  <script src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
  <link href="css/fonts.css" rel="stylesheet" />
</head>
<?php
  //require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
  //$connect = DBConnect();
  $connect->query('set character set euckr;');
  $connect->query("set session character_set_connection=utf8;");
  $connect->query("set session character_set_results=utf8;");
  $connect->query("set session character_set_client=utf8;");
?>
<body>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <style>
      div, body{
        font-family : 'Noto Sans KR', sans-serif;
      }
      p.a {
        cursor: pointer;
        font-weight: bold;
      }
      div.div1, div.div2, div.div3, div.div4, div.div5 {
        font-size : 20px;
        padding-bottom : 3px;
      }
      div.container {
        margin : 0 auto;
        width : 1000px;
      }
      h1{
        font-size : 30px;
        text-align: center;
      }
      menu{
        font-size : 25px;
        text-align: center;
        font-weight : bold;
      }
      div.answer2, div.answer3, div.answer4, div.answer5{
        display: none;
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script>
      $(document).ready( function() {
        $( 'div.div1' ).click( function() {
          $( 'div.answer1' ).toggle( 'slow' ); });
        $( 'div.div2' ).click( function() {
          $( 'div.answer2' ).toggle( 'slow' ); });
        $( 'div.div3' ).click( function() {
          $( 'div.answer3' ).toggle( 'slow' ); });
        $( 'div.div4' ).click( function() {
          $( 'div.answer4' ).toggle( 'slow' ); });
        $( 'div.div5' ).click( function() {
          $( 'div.answer5' ).toggle( 'slow' ); });
      });
    </script>
    <br>
   <div class="container">
        <h1>hi, OPP!</h1>
        <menu>
          아래에 질문들에 너의 생각을 담아 작성해줘!
        </menu><br>
    <?php
     $result = mysqli_query($connect, "SELECT * FROM question WHERE questnum = 1");
     $row = mysqli_fetch_array($result);
     for($i=1; $i<6; $i++){
     echo '<div class="div'.$i.'">'.$i.'.&nbsp'.$row[$i].'</div>';
     echo '<div class="answer'.$i.'">';
     echo '<input class="b'.$i.'" maxlength="300" placeholder="&nbsp내용을 입력하세요. " name="answer"'.$i.' style="width:800px; height:80px; text-align: top;""></div><br>';
   }
   ?>
   <input style="float:right;" type='submit' value='입력완료'>
</div>
</body>
</html>
