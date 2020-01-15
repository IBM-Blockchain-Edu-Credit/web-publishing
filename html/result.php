<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY OPP PAGE</title>

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
     <div class="container">
       <div>
    <br><br><menu>네가 한 내용들</menu>
        <menu style="font-size:18px;weight:normal;">: 적은 내용들을 다시 한 번 살펴봐!</menu>
     </div>
     <div class="button-1">
    <div class="eff-1"></div>
    <a href="qna.php"> 되돌아가기 </a>
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
