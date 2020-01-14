<?php
function DBConnect()
{
  $connect = new mysqli('호스트명','아이디', '비번', 'db', '포트');
    if($connect->connect_errno){
        echo '[연결실패] : '.$connect->connect_error;
        exit;
    }
    if(!$connect->set_charset('utf8'))// (php >= 5.0.5)
    {
        echo '[문자열변경실패] : '.$connect->connect_error;
        exit;
    }
    $connect->query('set character set euckr;');
    $connect->query("set session character_set_connection=utf8;");
    $connect->query("set session character_set_results=utf8;");
    $connect->query("set session character_set_client=utf8;"); //여기까지 공통
    return $connect;
}
?>
