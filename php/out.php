<?php
$userid=$_POST['userid'];
$conn=mysqli_connect("127.0.0.1","root","1234","phone");
$sql="delete from user where userid='$userid'";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('注销成功');
window.location.href='../index.html';</script>";
}else{
    echo "<script>alert('注销失败，请稍后重试');
window.location.href='http://localhost:63342/phone-shop/userinfo.html';</script>";
}
mysqli_close($conn);
?>
