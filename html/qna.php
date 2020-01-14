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
    <div class="title">
         <h1 style="font-size:50px;text-align:left;color:white;font-weight:bold;">WRITING OPP :P</h1>
    </div>

   <div class="container">
        <menu>
          아래에 질문들에 너의 생각을 담아 작성해줘!
        </menu><br>
    <?php
     $result = mysqli_query($connect, "SELECT * FROM question WHERE questnum = 1");
     $row = mysqli_fetch_array($result);
     for($i=1; $i<6; $i++){
     echo '<div class="div'.$i.'">'.$i.'.&nbsp'.$row[$i].'</div>';
     echo '<div class="answer'.$i.'">';
     echo '<textarea class="b'.$i.'" maxlength="300" placeholder="&nbsp내용을 입력하세요. " name="answer'.$i.'" style="text-align: top;""></textarea></div><br>';
   }
   ?>
   <div>
     <div class="button-1">
    <div class="eff-1"></div>
    <a href="category.php"> 되돌아가기 </a>
    </div>
     <div class="button-4">
       <div class="eff-4"></div>
       <a href="#"> 다음 </a>
     </div>
   </div>
   <script>
   $("textarea").on('keydown keyup', function () {
     $(this).height(1).height( $(this).prop('scrollHeight')+12 );
   });
 </script>

</div>
</body>
</html>
