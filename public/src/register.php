<?php   
session_start(); 
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db( $con, 'users');
$mail=$_POST['mail'];
$name=$_POST['uname'];
$pass=$_POST['pwd'];
$cpass=$_POST['cpwd'];

$s="select * from customer where username ='$name'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);

$s1="select * from customer where mail = '$mail'";
$result1 = mysqli_query($con,$s1);
$num1 = mysqli_num_rows($result1);

if ($num1 == 1) {
    echo'<script>alert("this user is already registered so login directly")</script>';
}
elseif($num==1){
    echo'<script>alert("username taken")</script>';
}
elseif ($pass != $cpass) {
    echo'<script>alert("Passwords did not match ")</script>';
} 
else {
    $reg="insert into customer (mail,username,password) values ('$mail','$name','$pass')";
    mysqli_query($con,$reg);
    header('location:../login.html');
}
?>