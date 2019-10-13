<?php
session_start();
$userid=$_POST['userid'];
$Procity=$_POST['Procity'];
$addinfo=$_POST['addinfo'];
$code=$_POST['code'];
$username=$_POST['username'];
$tel=$_POST['tel'];
$conn=mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,'utf8');
if(!$conn){
    die('Error： 数据库连接失败');
}
$sql="UPDATE user SET Procity='$_POST[Procity]',addinfo='$_POST[addinfo]',code='$_POST[code]',username='$_POST[username]',tel='$_POST[tel]'
where userid='$_POST[userid]'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("地址信息更新完成");
window.location.href="../userinfo.html";</script>';
}else{
    echo'Error'.$sql.'<br>'.mysqli_error($conn);
}
mysqli_close($conn);
?>