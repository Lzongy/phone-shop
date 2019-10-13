<?php
header("Content-type: text/html; charset=utf-8");
$userid = $_POST['userid'];
$password = $_POST['password'];
$conn = mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,'utf8');
if ($conn->connect_error){
    echo '数据库连接失败！';
    exit(0);
}else{
    if ($userid == ''){
        echo '<script>alert("请输入用户名！");history.go(-1);</script>';
    }
    if ($password == ''){
        echo '<script>alert("请输入密码！");history.go(-1);</script>';
    }
    $sql = "select userid,password from user where userid = '$_POST[userid]' and password = '$_POST[password]'";
    $result = $conn->query($sql);
    $number = mysqli_num_rows($result);
    if ($number) {
        echo '<script>window.location="http://localhost:63342/phone-shop/userinfo.html";</script>';
    } else {
        echo '<script>alert("用户名或密码错误！");history.go(-1);</script>';
    }
}
mysqli_close($conn);
?>

