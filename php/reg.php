<?php
header("Content-Type: text/html;charset=utf-8");
//获取值
session_start();
$userid=$_POST["userid"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$sex=$_POST["sex"];
$years=$_POST["years"];
$mon=$_POST["mon"];
$days=$_POST["days"];
$email=$_POST["email"];
// 创建连接

if($password!=$repassword){
        echo "
                    <script>
                    alert('密码不一致');
                      window.location.href='../main.html';
                    </script>";
}else {
    $conn = mysqli_connect("127.0.0.1", "root", "1234", "phone");
    mysqli_set_charset($conn, 'utf8');
    if (!$conn) {
        die('数据库连接失败');
    }

//向user表插入值
    $sql = "INSERT INTO user(userid, password,repassword,sex,years,mon,days,email)
VALUES ('$userid','$password','$repassword','$sex','$years','$mon','$days','$email')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
    alert("注册成功！");
    window.location.href="../index.html";
    </script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>