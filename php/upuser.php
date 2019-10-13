<?php
session_start();
$userid=$_POST['userid'];
$realname=$_POST['realname'];
$sex=$_POST['sex'];
$years=$_POST['years'];
$mon=$_POST['mon'];
$days=$_POST['days'];
$star=$_POST['star'];
$email=$_POST['email'];
$conn=mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,'utf8');
 if(!$conn){
     die('Error： 数据库连接失败');
 }
 $sql="UPDATE user SET realname='$_POST[realname]',sex='$_POST[sex]',years='$_POST[years]',mon='$_POST[mon]',days='$_POST[days]',star='$_POST[star]',email='$_POST[email]'
where userid='$_POST[userid]'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("信息修改成功");
window.location.href="../userinfo.html";</script>';
}else{
    echo'Error'.$sql.'<br>'.mysqli_error($conn);
}
mysqli_close($conn);
?>