<?php
session_start();
$realname=$_POST["realname"];
$years=$_POST["years"];
$mon=$_POST["mon"];
$days=$_POST["days"];
$address=$_POST["address"];
$tele=$_POST["tele"];
$conn=mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,'utf8');
if(!$conn){
    echo'Error:数据库连接失败';
}
$sql="UPDATE user SET realname='$_POST[realname]',years='$_POST[years]',mon='$_POST[mon]',days='$_POST[days]',address='$_POST[address]',tele='$_POST[tele]' WHERE userid='$_POST[userid]'";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("信息修改成功");
    window.location.href="../userinfo.html";</script>';
}else{
    echo'Error:'.$sql.'<br>'.mysqli_error($conn);
}
mysqli_close($conn);
?>
