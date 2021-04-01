<?php   
session_start(); 
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db( $con, 'users');
$mail=$_POST['mail'];
$name=$_POST['uname'];
$pass=$_POST['pwd'];
$cpass=$_POST['cpwd'];
if ($pass != $cpass) {
    echo'<script>alert("Passwords dont match ")</script>';
} 
else
{
$s="select * from customer where mail = '$mail'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo'<script>alert("user already exists or your pawwsword is wrong")</script>';
}
else {
    $reg="insert into customer (mail,username,password) values ('$mail','$name','$pass')";
    mysqli_query($con,$reg);
    header('location:../login.html');
}
}
?>