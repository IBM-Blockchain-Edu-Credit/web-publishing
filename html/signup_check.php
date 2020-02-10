<?php
  $insti = $_POST['institution'];
  $namekr = $_POST['username_kr'];
  $nameen = $_POST['username_en'];
  $id = $_POST['id'];
  $pw = $_POST['pass'];
  $pwc = $_POST['re_pass'];
  $birthdate = $_POST['birthdate'];

  require $_SERVER["DOCUMENT_ROOT"].'/scripts/dbconnect.php';
  $insticheck = mysqli_query($connect, "SELECT * FROM institution WHERE Institution = '$insti'");
  if(mysqli_num_rows($insticheck)==0){
    echo "<script>alert(\"등록되지 않은 기관입니다. 기관명을 다시 한 번 확인해주시기 바랍니다.\"); history.go(-1);</script>";
    exit();
  }

  $result = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
  if(mysqli_num_rows($result)==1){
    echo "<script>alert(\"이미 존재하는 아이디입니다\"); history.go(-1);</script>";
    exit();
  }

  if($insti == NULL || $namekr == NULL || $nameen == NULL || $id == NULL || $pw == NULL || $pwc == NULL ) {
      echo "<script>alert(\"채우지 않은 칸이 존재합니다\"); history.go(-1);</script>";
      exit();
  }

  if($pw!=$pwc) {
      echo "<script>alert(\"비밀번호와 비밀번호 확인이 일치하지 않습니다\"); history.go(-1);</script>";
      exit();
  }

    if(strtotime($birthdate) > strtotime(date('Y-m-d'))) {
      echo "<script>alert(\"현재 시간보다 생일이 이후로 설정되어 있습니다.\"); history.go(-1);</script>";
      exit();
    }

    $SIDcheck = mysqli_query($connect, "SELECT * FROM users");
    $SID = mysqli_num_rows($SIDcheck);
    $registerdate = date('Y-m-d');
    $instiID=mysqli_fetch_array($insticheck);
    $putinstiID = $instiID['InstitutionId'];
    $signup = mysqli_query($connect, "INSERT INTO users (SID, id, pw, username, InstitutionId, Institution, englishname, birthdate, registerdate) VALUES ('$SID', '$id', '$pw', '$namekr', '$putinstiID', '$insti', '$nameen', '$birthdate', '$registerdate')");
    if($signup){
      echo "<script>alert(\"회원가입 성공! 로그인하세용\"); location.href='index.php';</script>";
    }
    else{
        echo "<script>alert(\"회원가입 실패, 재시도\"); history.go(-1);</script>";
    }
 ?>
