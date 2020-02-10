<?php
  session_start();
  $id = $_POST['your_name'];
  $pw = $_POST['your_pass'];
  require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
  $result = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
  if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_array($result);
    if($row['pw'] == $pw){
      $_SESSION['id']= $id;
      if(isset($_SESSION['id'])){
        header('Location: script.php');
      }
      else{
        echo "<script>alert(\"세션 저장 실패(관리자에게 문의)\"); history.go(-1);</script>";
      }
    }
    else{
      echo "<script>alert(\"틀렸어 틀렸어~\"); history.go(-1);</script>";
    }
  }
  else{
    echo "<script>alert(\"존재하지 않는 아이디 입니당\"); history.go(-1);</script>";;
  }
 ?>
