<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OPP MAIN PAGE</title>

    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
    <link href="css/fonts.css" rel="stylesheet" />
    <link href="css/card.css" rel="stylesheet" />
  </head>
  <body style="background-color:#FFBB00">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
      <br>
      <div class="title">
           <h1 style="font-size:50px;text-align:left;color:white;font-weight:bold;">HI OPP :P</h1>
      </div>
      <?php
      session_cache_expire(1);
      session_start();
      if(!isset($_SESSION['id'])){
        header ('Location: index.php');
      }
       ?>
     <div class="container">
          <br><br><menu>
            <?php
            echo "로그인 정보 : ".$_SESSION['id'];
            ?>
           <br>오늘 학습한 부분과 너의 생각을 정리해볼까?
         </menu><br><br>

       <div>
        <div class="script">다음 기록지에 너의 생각을 담아 작성해줘!</div>
       <div class="button-4">
         <div class="eff-4"></div>
         <a href="category.php"> 다음 </a>
       </div>
     </div>
     <script>
       jQuery(function($) {
         $("div.title").css("display", "none");
         $("menu").css("display", "none");
         $('div.title').fadeIn(1000)
         $('menu').fadeIn(1000)
         $("a.transition").click(function(event){
         event.preventDefault();
         linkLocation = this.href;
         $("body").fadeOut(700, redirectPage);
         });
         function redirectPage() {
         window.location = linkLocation;
         }
       });
     </script>
  </body>
</html>
