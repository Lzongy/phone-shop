<?php
//获取值
session_start();
$userid=$_POST["userid"];
$oldpassword=$_POST["password"];
$repassword=$_POST["repassword"];
$password=$_POST["password"];
// 判定语句
if($password!==$repassword){
    echo'<script>alert("密码不一致！");history.go(-1);
    </script>';
    exit(0);
}
  $conn=mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,'utf8');
    if (!$conn) {
        die('数据库连接失败');
    }
//向user表更新password和repassword值
    $sql = "UPDATE user SET repassword='$_POST[repassword]',password='$_POST[password]' where userid='$_POST[userid]'";

    if(mysqli_query($conn, $sql)) {
        echo '<script>
    alert("密码修改成功");
    window.location.href="../enter.html" </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);
?>
