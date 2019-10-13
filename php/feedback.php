<?php
session_start();
$feedback=$_POST['feedback'];
$conn=mysqli_connect("127.0.0.1","root","1234","phone");
mysqli_set_charset($conn,"utf8");
$sql="INSERT INTO Feedback(feedback) values ('$feedback')";
if(mysqli_query($conn,$sql)){
    echo"<script> alert('提交成功');window.location.href='http://localhost:63342/phone-shop/about.html';</script>";
}else{
    echo"<script>alert('提交失败！');</script>";
}
mysqli_close($conn);
?>
