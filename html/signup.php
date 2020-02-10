<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>회원가입</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<style>
.dropdown {
  position: relative;
  margin-bottom: 25px;
  width: 100%;
  display: block;
  border: none;
  border-bottom: 1px solid #999;
  padding: 6px 30px;
  font-family: Poppins;
  box-sizing: border-box;
  color : #999;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  color : #222;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">회원가입</h2>
                        <form method="POST" action="signup_check.php" class="register-form" id="register-form">
							<!-- <div class="dropdown">  -->
							<!-- <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-accounts"></i>y</label>
                                </div>
							  <i class="zmdi zmdi-accounts"></i><span>소속 기관</span>
							  <div class="dropdown-content">
							    <p>kids a-z</p>
							  </div>
							</div>-->
              <div class="form-group">
                  <label for="institution"><i class="zmdi zmdi-accountse"></i></label>
                  <input type="text" name="institution" id="institution" placeholder="기관명(정확히 입력해주세요.)"/>
              </div>
							               <div class="form-group">
                                <label for="username_kr"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username_kr" id="username_kr" placeholder="한글 이름"/>
                            </div>
                            <div class="form-group">
                                <label for="username_en"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username_en" id="username_en" placeholder="영어 이름"/>
                            </div>
                            <div class="form-group">
                                <label for="id"><i class="z	mdi zmdi-account-add"></i></label>
                                <input type="text" name="id" id="id" placeholder="아이디"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="비밀번호"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="비밀번호를 한번 더 입력해주세요"/>
                            </div>
                            <div class="form-group">
                                <label for="birthdate"><i class="zmdi zmdi-calendar-check"></i></label>
                                <input type="date" name="birthdate" id="birthdate" placeholder="생일"/>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span><a href="#" class="term-service">약관</a>에 동의를 체크해 주십시오 </label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="회원가입"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">이미 회원이신가요?</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
